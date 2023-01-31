<!DOCTYPE html>
<html lang="en" class="news_page">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="yandex-verification" content="5e78d15ba3b7a344" />
    <meta name="viewport" content="width=device-width" />

    <title>GTA Latam — Descubre el juego!</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main5e53.css?v=1672425198') }}">

    <script src="{{ asset('js/jquery.min592e.js?ver=3') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/swal.js') }}"></script>
    <script src="{{ asset('js/countimator.js') }}"></script>
    <script src="{{ asset('js/countdown.plugin.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/scripts5e53.js?v=1672425198') }}"></script>

</head>

<body class="redirecting loaded inner_page_loaded news_page news_list_page">
    @include('layouts.popups-login')

    <div data-scroll-container class="page inner_page">
        <div data-scroll data-scroll-speed="-4" class="inner_page_loader shop_page">
            <div class="container default">
                <i></i>
            </div>
            <!-- /.container -->
        </div>
        <header id="header_trigger">
            <div class="container">
                <div class="header_top">
                    <a href="{{ url('/') }}" class="logo linkout"></a>
                    <nav>
                        <ul>
                            <li>
                                <a href="javascript:void();">Foro</a>
                            </li>
                            <li>
                                <a href="{{ url('/todas-las-noticias') }}" data-scroll-to>Noticias</a>
                            </li>
                            <li style="flex: auto">
                                <a href="javascript:void();" class="shop">Tienda</a>
                            </li>
                            <li>
                                <a href="javascript:void();">Soporte</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header_additional">
                        <a class="header_additional_discord" href="javascript:void();" target="_blank">Discord</a>
                    </div>
                    <a class="header_mob_discord" href="javascript:void();" target="_blank"></a>

                    <div class="userpanel">
                        <a href="#steps_trigger" data-scroll-to> Cómo empezar a jugar</a>
                        <a href="#" class="login"> Iniciar Sesión</a>
                    </div>
                    <!-- /.userpanel -->
                </div>
            </div>
            <!-- /.container -->
        </header>
        <!-- Header movil -->
        <div class="navigation_window">
            <div class="navigation_window_close"></div>
            <ul>
                <li><a href="javascript:void();">Foro</a></li>
                <li><a href="{{ url('/todas-las-noticias') }}">Noticias</a></li>
                <li><a href="#steps_trigger" data-scroll-to
                        onclick="$('.navigation_window_close').trigger('click')">Cómo empezar a jugar</a>
                </li>
                <li class="window_discord_link">
                    <a href="javascript:void();" target="_blank"><span>Discord</span></a>
                </li>
                <li class="btn_shop_link">
                    <a href="javascript:void();"><span>Tienda</span></a>
                </li>
            </ul>

        </div>
        <!-- /.navigation_window -->

        <div class="shop game_shop">
            <div class="container default">
                <div class="news_page_row">
                    <h3>Noticias <span>{{ $count }}</span></h3>
                    <div class="news_container">
                        @foreach ($noticias as $item)
                        <div class="news_container_unit">
                            {{-- {{ url('/noticias/'.$item->id.'/articulo') }} --}}
                            <a href="javascript:void();">
                                <img src="{{ asset(''.$item->url_imagen.'') }}" width="380px" alt="{{ $item->titulo }}">
                                <h3 style="margin-top:8px;margin-bottom:8px;">{{ $item->titulo }}<br /></h3>
                                <span style="margin-top:8px;">{{ \Carbon\Carbon::parse($item->created_at)->format('d.m.Y') }}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- /.news_container -->
                </div>
                <!-- /.news_page_row -->
            </div>
            <!-- /.container default -->
        </div>
        <!-- /.shop -->

        <footer data-scroll>
            <div class="container">
                <div class="footer_leftSide">
                    <div class="copyright">
                        <a href="{{ url('/') }}" class="logo"></a>
                        <p>Copyright © 2023 GTA Latam <br>Todos los derechos reservados</p>

                    </div>
                    <!-- /.copyright -->
                    <a href="mailto:info@gmail.com" class="mail">info@gmail.com</a>
                    <ul class="social">
                        @if($redes)
                            @foreach($redes as $item)
                                @if($item->nombre == 'Facebook')
                                    <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"
                                            class="facebook"></a></li>
                                @endif
                                @if($item->nombre == 'Twitter')
                                    <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"
                                            class="twitter"></a></li>
                                @endif
                                @if($item->nombre == 'Instagram')
                                    <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"
                                            class="instagram"></a></li>
                                @endif
                                @if($item->nombre == 'YouTube')
                                    <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"
                                            class="youtube"></a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
                <!-- /.footer_leftSide -->
                <nav>
                    <ul>
                        <li><a href="{{ url('/todas-las-noticias') }}">Noticias</a></li>
                        <li><a href="javascript:void();">Tienda</a></li>
                        <li><a href="#steps_trigger" data-scroll-to>Empezar Juego</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ url('politicas-de-privacidad') }}">Políticas de Privacidad</a>
                        </li>
                        <li><a href="javascript:void();">Acuerdo del Usuario</a></li>
                        <li><a href="{{ url('politicas-de-reembolso') }}">Política de devolución de
                                dinero</a></li>
                    </ul>
                </nav>
                <div class="footer_contacts">
                    <p>
                        United State, Florida. <br>
                        +351920371103<br>
                        Soporte info@gmail.com
                    </p>
                </div>
                <!-- /.footer_contacts -->
            </div>
            <!-- /.container -->
        </footer>
    </div>
</body>

</html>
