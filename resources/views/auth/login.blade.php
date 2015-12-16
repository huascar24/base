@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Inicio de sesión</div>
                    <div class="panel-body">
                        @include('partials/errors')
                        @include('partials/success')

                        <form class="uk-form" role="form" method="POST" action="{{ route('login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table>
                        
                            <tr>
                                <th>Correo:</th><td><input type="email" class="form-control" name="email" value="{{ old('email') }}"></td>
                            </tr>
                            <tr>
                                <th>Clave:</th><td><input type="password" class="form-control" name="password"> </td>
                             </tr>
                             <tr>
                            <td><button type="submit" class="uk-button uk-button-primary">Iniciar Session</button></td>
                            <td><input type="checkbox" name="remember">@lang('auth.remember')</td>
                            </tr>

                            <tr>
                            <td></td>
                                <th>  <a href="/password/email">¿Olvidaste tu contraseña?</a></th>
                            </tr>
                        </table>
                       </form>
                     </div>
@endsection