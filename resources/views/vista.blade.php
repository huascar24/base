<!DOCTYPE html>
<html>
    <head>
        <title></title>
      <link rel="stylesheet" href="{{ asset('css/uikit.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/uikit.docs.min.css')}}">
        <script src="{{ asset('/js/jquery.js')}}"></script>
        <script src="{{ asset('/js/uikit.min.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('css/docs.css')}}">
        <script src="{{ asset('js/docs.js')}}"></script>
        <script src="{{ asset('js/components/slideshow.js')}}"></script>
        <script src="{{ asset('js/components/slideshow-fx.js')}}"></script>
        <script src="{{ asset('js/components/notify.js')}}"></script>
        <script src="{{ asset('js/components/datepicker.js')}}"></script>
        <script src="{{ asset('js/components/form-select.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
 
</head>
<body>
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
      
        <nav class="uk-navbar">

                
        <a class="uk-navbar-brand uk-hidden-small" href="">Inicio</a>
        @if (Auth::check())
                    <li><a href="{{ url('account') }}">Account</a></li>
                @endif


<div class="uk-navbar-content uk-navbar-flip  uk-hidden-small">
                    @if (Auth::guest())
       <div class="uk-navbar-flip">
        <ul class="uk-navbar-nav">
            <li><a href="{{ route('login')}}">Inicio</a></li>
            <li><a href="{{ route('register')}}">Registro</a></li>
        </ul>
    </div>
                     
                    @else
                            <div class="uk-navbar-content uk-navbar-flip  uk-hidden-small">
                                                               <div class="uk-button-group">
                                <button class="uk-button uk-button-primary"><i class="uk-icon-user"></i> {{ Auth::user()->name }}</button>
                                <div data-uk-dropdown="{mode:'click'}">
                                    <button class="uk-button uk-button-primary"><i class="uk-icon-caret-down"></i></button>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav uk-nav-dropdown">

                                            <li><a href="{{ url('account/edit-profile') }}"><i class="uk-icon-eye"></i> Editar Perfil</a></li>
                                              <li><a href="{{ url('account/password') }}"><i class="uk-icon-eye"></i> Cam Password</a></li>
      
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="{{ route('logout') }}"><i class="uk-icon-sign-in"></i> Salir</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                    </div>
         
    @endif
                                    </div>
</div>    

<div class="uk-container uk-container-center">      
                                


@yield('content')
</div>
<!-- Scripts -->
@yield('scripts')
</body>
</html>