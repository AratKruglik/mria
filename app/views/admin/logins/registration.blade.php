@extends('admin.logins.layout')

@section('title')
Регистрация пользователя
@stop

@section('content')


{{Form::open(['class' => 'form-signin'])}}
        <h2 class="form-signin-heading">Реєстрація нового користувача</h2>
        <div class="login-wrap">
        @if ($errors->all())
            <div class="alert alert-block alert-danger fade in">
              <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="icon-remove"></i>
              </button>
              <strong>Помилка!</strong>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
            <input type="text" class="form-control" name="email" placeholder="Email" autofocus />
            <input type="text" class="form-control" name="username" placeholder="Логін" />
            <input type="password" class="form-control" name="password" placeholder="Пароль (мінімум 6 символів)" />
            <input type="password" class="form-control" name="password_confirmation" placeholder="Повторіть пароль" />
            <span class="pull-right">
                <a data-toggle="modal" href="/login"> Вже зареєстровані?</a>
            </span>
            <input type="submit" class="btn btn-lg btn-login btn-block" value="Реєстрація" />
{{Form::close()}}
        </div>
@stop