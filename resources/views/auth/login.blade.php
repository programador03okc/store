@extends('themes/lte/layout_login')

@section('content')
    <div class="login-logo">
        <a href="/">
            <b>Intranet</b>
        </a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">INICIAR SESION</p>
        <form class="form-login" method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback {{ $errors->has('user') ? 'has-error' : '' }}">
                <input class="form-control"
                    type="text"
                    name="user"
                    placeholder="Ingrese su usuario"
                    autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                {!! $errors->first('user', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                <input class="form-control"
                    type="password"
                    name="password"
                    placeholder="Ingrese su clave">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
              <button type="submit" class="btn bg-maroon btn-block">Ingresar</button>
            </div>
        </form>
        <p class="footer-login">
            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        </p>
    </div>
@endsection

@section('scripts')
@endsection