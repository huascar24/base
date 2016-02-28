@extends('layout')

@section('content')
    <div class="uk-container">
        <div class="uk-panel">
            <h3 class="uk-panel-title">Recuperar Password</h3>
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @include('partials/errors')
            </div>



                        <form class="uk-form"  method="POST" action="/password/email">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label>Correo</label>
                                    <input type="email" name="email" value="{{ old('email') }}">
<br><br>
                            <button type="submit" class="uk-button uk-button-primary">Recuperar</button>
        </div>
    </div>
@endsection