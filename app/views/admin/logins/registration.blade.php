@extends('admin.logins.layout')

@section('title')
Регистрация пользователя
@stop

@section('content')


{{Form::open(['class' => 'form-signin'])}}
        <h2 class="form-signin-heading">Регистрация нового пользователя</h2>
        <div class="login-wrap">
        @if ($errors->all())
            <div class="alert alert-block alert-danger fade in">
              <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="icon-remove"></i>
              </button>
              <strong>Ошибка!</strong>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
            <input type="text" class="form-control" name="email" placeholder="Email" autofocus />
            <input type="text" class="form-control" name="username" placeholder="Логин" />
            <input type="password" class="form-control" name="password" placeholder="Пароль (минимум 6 символов)" />
            <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль" />
            <span class="pull-right">
                <a data-toggle="modal" href="/login"> Уже зарегистрованы?</a>
            </span>
            <input type="submit" class="btn btn-lg btn-login btn-block" value="Регистрация" />
{{Form::close()}}
        </div>
@stop