@extends('layout')

@section('content')
    <div class="uk-container">
        <div class="uk-panel">
            <h3 class="uk-panel-title">Registro</h3>
            <div class="panel-body">
                @include('partials/errors')
            </div>

                        <form class="uk-form"  method="POST" action="/password/reset">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <table>
                                <tr>
                                    <th>Correo</th><td><input type="email"  name="email" value="{{ old('email') }}"></td>
                                </tr>
                                <tr>
                                    <th>Password</th><td> <input type="password" name="password"></td>
                                </tr>
                                <tr>
                                    <th>Confirm Password</th><td> <input type="password" name="password_confirmation"></td>
                                </tr>
                            </table>


                            <button type="submit" class="uk-button uk-button-primary">Recuperar Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection