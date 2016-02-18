@extends('layout')

@section('content')

    <div class="uk-container">
        <div class="uk-panel">
            <div class="panel-body">
                @include('partials/errors')
                @include('partials/success')
            </div>
            <fieldset data-uk-margin>
                <legend>Actualizar Contraseña</legend>


            <form class="uk-form" method="POST" action="{{ url('account/password')  }}">
                      {!! csrf_field() !!}


                <table >
                    <tr>
                    <th>Contraseña Actual</th><td><input type="text" class="form-control" name="current_password"></td>
                    </tr>
                    <tr><th>Nueva Contraseña</th><td><input type="text" class="form-control" name="password"></td></tr>
                    <tr><th>Comfirma tu Contrseña</th><td><input type="text" class="form-control" name="password_confirmation"></td></tr>
                    <tr>
                        <td><button type="submit" class="uk-button uk-button-primary">
                                Registrar
                            </button></td>
                        <td><button type="reset" name="limpiar" class="uk-button uk-button-success"> Limpiar</button></td>
                    </tr>
                </table>
                        </form>
                    </div>
                </div>

@endsection