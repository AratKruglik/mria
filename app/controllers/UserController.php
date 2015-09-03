<?php

class UserController extends BaseController {

	public function getRegister() {

    	return View::make('admin.logins.registration');

	}

	public function postRegister() {
    	// Проверка входных данных
    	$rules = User::$validation;
    	$validation = Validator::make(Input::all(), $rules);
    	
    	if ($validation->fails()) {
        	// В случае провала, редиректим обратно с ошибками и самими введенными данными
        	return Redirect::to('users/register')->withErrors($validation)->withInput();
    	}
 
    	// Сама регистрация с уже проверенными данными
    	$user = new User();
    	$user->fill(Input::all());
    	$id = $user->register();
 
    	// Вывод информационного сообщения об успешности регистрации
    	return $this->getMessage("Реєстрація майже завершена. Вам необхідно підтвердити e-mail, вказаний при реєстрації, перейдіть за посиланням в листі.");
	}

	public function getActivate($userId, $activationCode) {
    	// Получаем указанного пользователя
    	$user = User::find($userId);
    	if (!$user) {
        	return $this->getMessage("Невірне посилання активації аккаунту.");
    	}
 
    	// Пытаемся его активировать с указанным кодом
    	if ($user->activate($activationCode)) {
        	// В случае успеха авторизовываем его
        	Auth::login($user);
        	// И выводим сообщение об успехе
        	return $this->getMessage("Аккаунт активовано", "/");
    	}
 
    	// В противном случае сообщаем об ошибке
    	return $this->getMessage("Невірне посилання для активації аккаунта або аккаунт вже активовано.");
	}

	public function getLogin() {
	    return View::make('admin.logins.login');
	}

	public function postLogin() {
	    // Формируем базовый набор данных для авторизации
	    // (isActive => 1 нужно для того, чтобы аторизоваться могли только
	    // активированные пользователи)
	    $creds = array(
	        'password' => Input::get('password'),
	        'isActive'  => 1,
	    );
	 
	    // В зависимости от того, что пользователь указал в поле username,
	    // дополняем авторизационные данные
	    $username = Input::get('username');
	    if (strpos($username, '@')) {
	        $creds['email'] = $username;
	    } else {
	        $creds['username'] = $username;
	    }
	 
	    // Пытаемся авторизовать пользователя
	    if (Auth::attempt($creds, Input::has('remember'))) {
	        Log::info("User [{$username}] successfully logged in.");
	        return Redirect::to('/');
	    } else {
	        Log::info("User [{$username}] failed to login.");
	    }
	 
	    $alert = "Невірна комбінація (email) та пароля, або аккаунт ще не активовано.";
	 
	    // Возвращаем пользователя назад на форму входа с временной сессионной
	    // переменной alert (withAlert)
	    return Redirect::back()->withAlert($alert);
	}

	public function getLogout() {
	    Auth::logout();
	    return Redirect::to('/');
	}





}
