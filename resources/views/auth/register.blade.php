@extends('layout')

@section('content')
    <div class="uk-container">
        <div class="uk-panel">
                    <h3 class="uk-panel-title">Registro</h3>
                    <div class="panel-body">
                        @include('partials/errors')
                         </div>   

                        <fieldset>
                              <legend>Registro</legend>
                         <table>
                         <form class="uk-form" role="form" method="POST" action="{{ route('register') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <tr>
                                <th>Nombre</th><td><input type="text" class="form-control" name="name" value="{{ old('name') }}"></td>
                            </tr>
                            <tr>
                                <th>Correo:</th><td><input type="email" class="form-control" name="email" value="{{ old('email') }}"></td>
                            </tr>
                            <tr>
                                <th>Clave:</th><td><input type="password" class="form-control" name="password"> </td>
                            </tr>
                            <tr>
                                <th>Repite Clave</th><td><input type="password" class="form-control" name="password_confirmation"></td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="uk-button uk-button-primary">
                                  Registrar
                                    </button></td>
                                    <td><button type="reset" name="limpiar" class="uk-button uk-button-success"> Limpiar</button></td>
                            </tr>
                        </table>
</form>
                        </fieldset>

    </div>
@endsection