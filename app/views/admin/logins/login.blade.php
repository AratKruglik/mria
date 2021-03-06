@extends('admin.logins.layout')

@section('title')
Вход
@stop

@section('content')

{{Form::open(['class' => 'form-signin'])}}
        <h2 class="form-signin-heading">Увійти в адмінпанель</h2>
        <div class="login-wrap">
        @if (Session::has('alert'))
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                </button>
                <strong>Помилка!</strong> {{ Session::get('alert') }}
            </div>
        @endif
            <input type="text" class="form-control" name="username" placeholder="Email або логін" autofocus />
            <input type="password" class="form-control" name="password" placeholder="Пароль" />
            <label class="checkbox">
                <input type="checkbox" name="remember" value="remember-me" /> Запам'ятати мене
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Забули пароль?</a>
                </span>
            </label>
            <input type="submit" class="btn btn-lg btn-login btn-block" value="Увійти" />
{{Form::close()}}
            <div class="registration">
                <a class="" href="/users/register">
                    Зареєструватись
                </a>
            </div>
        </div>
      
          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                    {{Form::open( ['action' => 'RemindersController@postRemind', 'method' => 'post'])}}
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Забули пароль?</h4>
                      </div>
                      <div class="modal-body">
                      @if (Session::has('status'))
                          <div class="alert alert-success">
                              {{ Session::get('status') }}
                          </div>
                      @elseif (Session::has('error'))
                          <div class="alert alert-danger">
                              {{ Session::get('error') }}
                          </div>
                      @endif
                          <p>Введіть Ваш email для скидання пароля</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                      </div>
                      <div class="modal-footer">
                          <!-- <button data-dismiss="modal" class="btn btn-default" type="button">Отмена</button> -->
                          <input class="btn btn-success" type="submit" value="Скинути пароль" />
                      </div>
                    {{Form::close()}}
                  </div>
              </div>
          </div>

@stop