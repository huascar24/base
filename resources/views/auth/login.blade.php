@extends('layout')

@section('content')
    <div class="uk-container">
        <div class="uk-panel">
            <div class="panel-body">
                @include('partials/errors')
                @include('partials/success')
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-2">Sistema web desarrollado bajo ambiente linux</div>




                            <div class="uk-width-1-2">
                                <fieldset data-uk-margin>
                                    <legend>Editar Usuario</legend>
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
            </fieldset>
                     </div>
                    </div>
    </div>
    </div>
@endsection