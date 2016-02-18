@extends('layout')

@section('content')

    <div class="uk-container">
        <div class="uk-panel">
           <div class="panel-body">
                @include('partials/errors')
            </div>
            <fieldset data-uk-margin>
                <legend>Editar Usuario</legend>
            <form class="uk-form" method="POST" action="{{ url('account/edit-profile') }}">




                            {!! method_field('PUT') !!}
                            {!! csrf_field() !!}
                    <div class="uk-form-row"><input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}"></div>
                    <button class="uk-button uk-button-primary" type="submit">Editar</button>


                </fieldset>
                        </form>
</div>
    </div>
@endsection