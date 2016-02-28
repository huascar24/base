@extends('layout')

@section('content')

                @include('partials/success')

            <div class="container">
                <div class="uk-grid">
                <div class="uk-width-1-4">

                    <div class="uk-panel uk-panel-box">

                        <h3 class="uk-panel-title">Nav side in panel</h3>

                        <ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav>
                            <li class="uk-active"><a href="#">Active</a></li>

                            <li class="uk-parent">
                                <a href="#">Parent</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">Sub item</a></li>
                                    <li><a href="#">Sub item</a>
                                        <ul>
                                            <li><a href="#">Sub item</a></li>
                                            <li><a href="#">Sub item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="uk-parent">
                                <a href="#">Parent</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">Sub item</a></li>
                                    <li><a href="#">Sub item</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Item</a></li>

                            <li class="uk-nav-header">Header</li>
                            <li class="uk-parent"><a href="#"><i class="uk-icon-star"></i> Parent</a></li>
                            <li><a href="#"><i class="uk-icon-twitter"></i> Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#"><i class="uk-icon-rss"></i> Item</a></li>
                        </ul>
</div>
                    </div>

                    <div class="uk-width-1-4">Sistema web desarrollado bajo ambiente linux</div>
                </div>

            </div>

@endsection