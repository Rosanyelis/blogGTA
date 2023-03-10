<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="5e78d15ba3b7a344" />
    <meta name="viewport" content="width=device-width">

    {{-- <meta name="description"
        content="Fly to the GTA 5 RP server. Best-in-class RP project with voice chat, unique systems and many online players."> --}}
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

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/icon/apple-icon-152x152.png') }}">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icon/apple-icon-180x180.png') }}>"-->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/icon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icon/favicon-16x16.png') }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">
    <link rel="manifest" href="{{ asset('images/icon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/icon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="format-detection" content="telephone=no">

</head>

<body class="main_page">

    @include('layouts.popups-login')

    <div data-scroll-container class="page">
        {{-- <div class="loader reseted destroyable" data-scroll data-scroll-speed="-4">
            <div class="logo"></div>--}}
            <div class="action">
                <div class="action_center"></div>
            </div>
            <!-- /.action -->
            <i></i>
        {{--</div> --}}
        <!-- /.loader -->

        @include('layouts.navigationweb')

        <div class="steps_section" id="steps_trigger">
            <div class="steps">
                <div class="steps_row is-inview">
                    <div class="step buy">
                        <h5>1</h5>
                        <div class="step_description">
                            <h3>Compre una versión con licencia de GTA 5 <br></h3>
                            <p>
                                Compra una versión con licencia de <br> GTA 5 en <br> la tienda para jugar en nuestro
                                servidor.
                                <!-- Buy license <br> in store to play <br> on our server. -->
                            </p>
                            <a href="javascript:void();">Comprar</a>
                        </div>
                        <!-- /.step_description -->
                    </div>
                    <!-- /.step -->
                    <div class="step install">
                        <h5>2</h5>
                        <div class="step_description step_description-download">
                            <h3>Instala nuestro launcher</h3>
                            <p>Para un juego cómodo en nuestro servidor, <br> creamos un launcher personal <br><br></p>
                            <div class="btn-group-download">
                                <a class="step_install_link  custom-margin-btn-tu">Descargar
                                    <i>
                                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.0213 12.0982C7.75117 12.4006 7.5505 12.7985 7.56851 13.223C7.58909 13.6448 7.72801 14.0428 8.0213 14.3478C8.86515 15.218 9.70642 16.0855 10.5503 16.9556C10.6686 17.0777 10.7844 17.1971 10.9027 17.3191C10.9027 17.3191 10.9027 17.3191 10.9053 17.3191C10.9053 17.3191 10.9053 17.3191 10.9053 17.3217C10.9387 17.3562 10.9748 17.3907 11.0134 17.4226C11.0468 17.4517 11.0828 17.4756 11.1188 17.5021C11.124 17.5075 11.1291 17.5101 11.1368 17.5154C11.1394 17.5154 11.1394 17.5181 11.142 17.5181C11.2295 17.5791 11.3272 17.6295 11.4276 17.6719C11.5382 17.7197 11.654 17.7568 11.7723 17.7727C11.8495 17.786 11.9241 17.7913 11.9987 17.7887C12.027 17.786 12.0579 17.786 12.0862 17.7834C12.1762 17.778 12.2714 17.7621 12.364 17.7383C12.6367 17.6719 12.8966 17.5393 13.0895 17.3217C13.0972 17.3138 13.1024 17.3058 13.1101 17.2979C13.9462 16.4357 14.7824 15.5735 15.6185 14.7113C15.7368 14.5893 15.8526 14.4699 15.9709 14.3478C16.2514 14.0587 16.4237 13.6316 16.4237 13.223C16.4237 12.833 16.2565 12.3661 15.9709 12.0982C15.6777 11.8196 15.2917 11.6127 14.8801 11.6313C14.4711 11.6498 14.0852 11.7931 13.7893 12.0982C13.707 12.1831 13.6246 12.268 13.5423 12.3528C13.5423 11.9761 13.5423 11.5968 13.5423 11.2201C13.5423 9.80871 13.5423 8.39471 13.5423 6.98336C13.5423 5.75506 13.5423 4.52677 13.5423 3.29847C13.5423 2.70687 13.5475 2.11262 13.5423 1.52102C13.5423 1.51306 13.5423 1.50511 13.5423 1.49715C13.5423 1.0886 13.3699 0.66148 13.0895 0.372313C12.8194 0.0964103 12.3795 -0.110517 11.9961 -0.0945991C11.5974 -0.0760288 11.1831 0.0592696 10.9053 0.372313C10.6274 0.682703 10.4525 1.06472 10.4525 1.49715C10.4525 1.98793 10.4525 2.47872 10.4525 2.96951C10.4525 4.13679 10.4525 5.30672 10.4525 6.474C10.4525 7.88535 10.4525 9.29935 10.4525 10.7107C10.4525 11.2599 10.4525 11.8064 10.4525 12.3555C10.3702 12.2706 10.2878 12.1857 10.203 12.0982C9.92253 11.809 9.50832 11.6313 9.11213 11.6313C8.73394 11.6313 8.28114 11.8037 8.0213 12.0982Z"
                                                fill="#0066FF" />
                                            <path
                                                d="M22.9998 18.357C22.9998 17.2773 22.9998 16.1949 22.9998 15.1152C22.9998 13.8816 22.9998 12.648 22.9998 11.4144C22.9998 10.4514 22.9998 9.49103 22.9998 8.52802C22.9998 8.28395 22.9998 8.04254 22.9998 7.79847C22.9998 7.76133 22.9998 7.72419 22.9998 7.68705C22.9973 7.38727 22.9561 7.08484 22.9021 6.78771C22.8403 6.45345 22.7066 6.14306 22.5728 5.83267C22.4647 5.58595 22.3181 5.37637 22.1586 5.16413C21.9965 4.9466 21.837 4.74232 21.6312 4.56723C21.1269 4.14276 20.5815 3.79789 19.9357 3.64402C19.3286 3.50076 18.724 3.52198 18.1066 3.52198C17.6949 3.52198 17.2807 3.52198 16.8691 3.52198C16.4729 3.52198 16.0587 3.69973 15.7783 3.98889C15.5107 4.2648 15.31 4.71844 15.3255 5.11373C15.3435 5.52493 15.4747 5.95205 15.7783 6.23856C16.0793 6.52508 16.4523 6.70547 16.8691 6.70547C17.5148 6.70547 18.1606 6.70547 18.8063 6.70547C18.8989 6.70547 18.989 6.70547 19.079 6.71078C19.1588 6.72935 19.2385 6.75057 19.3183 6.7771C19.3981 6.81955 19.4752 6.8673 19.5524 6.91771C19.6064 6.97076 19.6605 7.02382 19.7119 7.08219C19.7582 7.15647 19.802 7.23075 19.8406 7.31034C19.8689 7.40319 19.8946 7.49604 19.9126 7.59155C19.9383 7.99744 19.9126 8.41395 19.9126 8.81454C19.9126 9.79081 19.9126 10.7671 19.9126 11.7433C19.9126 12.9451 19.9126 14.1495 19.9126 15.3513C19.9126 16.378 19.9126 17.4047 19.9126 18.434C19.9126 18.9009 19.9152 19.3678 19.9126 19.8321C19.9126 19.8745 19.91 19.9143 19.91 19.9568C19.892 20.0416 19.8714 20.1239 19.8457 20.2061C19.8045 20.2884 19.7582 20.368 19.7094 20.4475C19.6579 20.5033 19.6064 20.559 19.5498 20.612C19.4778 20.6598 19.4058 20.7049 19.3286 20.7447C19.2463 20.7738 19.1614 20.7977 19.0739 20.8163C18.9324 20.8216 18.7909 20.8216 18.6494 20.8216C18.3201 20.8216 17.9908 20.8216 17.6615 20.8216C16.5398 20.8216 15.4181 20.8216 14.2964 20.8216C12.9277 20.8216 11.5564 20.8216 10.1878 20.8216C9.01203 20.8216 7.83631 20.8216 6.66058 20.8216C6.12031 20.8216 5.58004 20.8243 5.04234 20.8216C5.00118 20.8216 4.96002 20.8189 4.91885 20.8189C4.83653 20.8004 4.75677 20.7792 4.67702 20.7526C4.59727 20.7102 4.52008 20.6624 4.4429 20.612C4.38888 20.559 4.33485 20.5059 4.2834 20.4475C4.23709 20.3733 4.19335 20.299 4.15476 20.2194C4.12646 20.1265 4.10073 20.0337 4.08272 19.9382C4.057 19.5323 4.08272 19.1158 4.08272 18.7152C4.08272 17.7389 4.08272 16.7627 4.08272 15.7864C4.08272 14.5846 4.08272 13.3802 4.08272 12.1784C4.08272 11.1517 4.08272 10.1251 4.08272 9.09574C4.08272 8.62883 4.08015 8.16192 4.08272 7.69766C4.08272 7.65521 4.0853 7.61542 4.0853 7.57297C4.10331 7.48808 4.12389 7.40584 4.14961 7.3236C4.19078 7.24136 4.23709 7.16177 4.28597 7.08219C4.33742 7.02648 4.38888 6.97076 4.44548 6.91771C4.51751 6.86995 4.58955 6.82485 4.66673 6.78506C4.75163 6.75588 4.83653 6.732 4.924 6.71343C5.16069 6.70017 5.40252 6.71078 5.63664 6.71078C6.05856 6.71078 6.48049 6.71078 6.90241 6.71078C7.00532 6.71078 7.10566 6.71078 7.20856 6.71078C7.60476 6.71078 8.01897 6.53303 8.29939 6.24387C8.56695 5.96796 8.76762 5.51432 8.75219 5.11903C8.73418 4.70783 8.60297 4.28071 8.29939 3.9942C7.99581 3.71299 7.62534 3.53259 7.20599 3.53259C6.77635 3.53259 6.34413 3.53259 5.91449 3.53259C5.30476 3.53259 4.71304 3.51402 4.11102 3.64402C3.4627 3.78197 2.91214 4.12685 2.40532 4.54601C2.24581 4.676 2.10431 4.82191 1.97825 4.98639C1.775 5.24903 1.57433 5.50636 1.43798 5.81144C1.16527 6.41896 1.00062 7.01852 0.998047 7.69501C0.998047 7.7295 0.998047 7.76664 0.998047 7.80113C0.998047 8.45374 0.998047 9.10636 0.998047 9.75897C0.998047 10.9103 0.998047 12.0617 0.998047 13.2104C0.998047 14.4254 0.998047 15.6405 0.998047 16.8555C0.998047 17.6991 0.998047 18.5428 0.998047 19.3837C0.998047 19.5349 0.998047 19.6835 0.998047 19.8347C1.00319 20.9542 1.44827 22.0897 2.25353 22.8564C3.0202 23.5859 4.00297 23.9998 5.04749 24.0024C5.18642 24.0024 5.32277 24.0024 5.4617 24.0024C6.20521 24.0024 6.94872 24.0024 7.69223 24.0024C8.81908 24.0024 9.94593 24.0024 11.0753 24.0024C12.2717 24.0024 13.468 24.0024 14.6643 24.0024C15.6419 24.0024 16.617 24.0024 17.5946 24.0024C18.0448 24.0024 18.4976 24.0051 18.9478 24.0024C19.9872 23.9971 20.9494 23.5912 21.7186 22.8776C22.5393 22.1162 22.9921 20.9622 22.9973 19.8347C23.0024 19.3386 22.9998 18.8478 22.9998 18.357Z"
                                                fill="#0066FF" />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <!-- /.step_description -->
                    </div>
                    <!-- /.step -->
                    <div class="step start">
                        <h5>3</h5>
                        <div class="step_description">
                            <h3>Ejecutar Launcher</h3>
                            <p>
                                Si está listo para <br> convertirse en parte del increíble mundo <br> de RolePlay, haga
                                clic en
                                en el botón de abajo y únete a nosotros!
                                <!-- Dual integrated <br> game launcher <br>running  via <br> our launcher  -->
                            </p>
                            <a href="javascript:void();">Jugar</a>
                        </div>
                        <!-- /.step_description -->
                    </div>
                    <!-- /.step -->
                </div>
                <!-- /.steps_row -->

                <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="-6"
                    data-scroll-target="#steps_trigger">Empezar juego</h2>
                <h3 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2"
                    data-scroll-target="#steps_trigger">Ahora</h3>

                <div class="murder front" data-scroll data-scroll-speed="-1" data-scroll-target="#steps_trigger"
                    data-scroll-id="murder_front"></div>
                <div class="murder back" data-scroll data-scroll-speed="-3" data-scroll-target="#steps_trigger"
                    data-scroll-id="murder_back"></div>
            </div>
            <!-- /.steps -->
        </div>
        <!-- /.steps_section -->
        <div class="news" data-scroll id="news_trigger">
            <div class="container">
                <div class="news_row">
                    <h3>NOTICIAS</h3>

                    <a href="{{ url('/todas-las-noticias') }}" class="all_news">Todas las noticias <span>4</span></a>

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
                <!-- /.news_row -->
                <div class="lawyer" data-scroll data-scroll-speed="2" data-scroll-target="#news_trigger"></div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.news -->
        <div class="communication" data-scroll>
            <div class="container">
                <div class="follow">
                    <h3>Mantenerse en contacto</h3>
                    <p>Suscríbete a nuestras redes sociales y mantente informado de todas las novedades</p>
                    <ul>
                        @if ($redes)
                        @foreach ($redes as $item)
                            @if ($item->nombre == 'Discord')
                            <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"  class="discord"></a></li>
                            @endif
                            @if ($item->nombre == 'Facebook')
                            <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"  class="facebook"></a></li>
                            @endif
                            @if ($item->nombre == 'Twitter')
                            <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"  class="twitter"></a></li>
                            @endif
                        @endforeach
                        @endif
                    </ul>
                </div>
                <!-- /.follow -->
                <div class="parthnership">
                    <h3>Colaboradores</h3>
                    <p>Siga el enlace para <br> ofrezca su cooperación</p>
                    <a href="javascript:void();"></a>
                </div>
                <!-- /.parthnership -->
            </div>
            <!-- /.container -->
            <i></i>
        </div>
        <!-- /.communication -->
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
                        @if ($redes)
                        @foreach ($redes as $item)
                            @if ($item->nombre == 'Facebook')
                            <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"  class="facebook"></a></li>
                            @endif
                            @if ($item->nombre == 'Twitter')
                            <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"  class="twitter"></a></li>
                            @endif
                            @if ($item->nombre == 'Instagram')
                            <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"  class="instagram"></a></li>
                            @endif
                            @if ($item->nombre == 'YouTube')
                            <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"  class="youtube"></a></li>
                            @endif
                        @endforeach
                        @endif
                    </ul>
                </div>
                <!-- /.footer_leftSide -->
                <nav>
                    <ul>
                        <li><a href="{{ url('/noticias') }}">Noticias</a></li>
                        <li><a href="javascript:void();">Tienda</a></li>
                        <li><a href="#steps_trigger" data-scroll-to>Empezar Juego</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ url('politicas-de-privacidad') }}">Políticas de Privacidad</a></li>
                        <li><a href="javascript:void();">Acuerdo del Usuario</a></li>
                        <li><a href="{{ url('politicas-de-reembolso') }}">Política de devolución de dinero</a></li>
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

    @include('layouts.scriptsPlayers')
</body>

</html>
