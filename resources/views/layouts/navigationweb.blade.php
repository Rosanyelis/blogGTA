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
                                <a href="#news_trigger" data-scroll-to>Noticias</a>
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
                <!-- /.header_top -->
                <div class="header_top_box">
                    <div class="online">
                        <div class="online_row">
                            <div class="online_server usa_server circle_0" style="cursor: pointer;"
                                href="#steps_trigger" data-scroll-to>
                                <div class="online_server_load"></div>
                                <div class="server_description">
                                    <h3 id="players" class="server_0">0</h3>
                                    <span>Jugadores Conectados</span>
                                </div>
                                <!-- /.server_description -->
                            </div>
                            <!-- /.online_server -->
                        </div>
                        <!-- /.online_row -->
                    </div>
                </div>
                <!-- /.header_top_box -->
                <div class="main_page_header_row">
                    <div class="promo" style="margin-top: 50px">
                        <h3>Comienza tu aventura <br> en GTA Latam</h3>
                        <p>¡Sumérgete en un maravilloso mundo de RolePlay!</p>
                        <div class="promo_buttons">
                            <a href="#steps_trigger" data-scroll-to class="start_play">
                                <span>Empezar a jugar</span>
                            </a>
                            <a href="#" class="watch videotoggle" data-video-embed="javascript:void();">
                                <h3>Mira nuestra guía</h3>
                                <span></span>
                            </a>
                        </div>
                        <!-- /.promo_buttons -->
                    </div>
                    <!-- /.promo -->
                </div>
                <!-- /.main_page_header_row -->
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
            <div class="navigation_window_online">
                <div class="navigation_window_online_total">
                    <h3 id="players" class="server_all">0</h3>
                    <span> Jugadores Conectados</span>
                </div>
                <!-- /.navigation_window_online_total -->
            </div>

        </div>
        <!-- /.navigation_window -->
