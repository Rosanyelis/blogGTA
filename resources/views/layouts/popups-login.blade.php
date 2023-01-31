<div class="promo_window_trigger">
            <h3>14 Dias</h3>
            <h4>GRATIS</h4>
        </div>
        <!-- /.promo_window_trigger -->
        <div class="promo_window">
            <span class="promo_window_close"></span>
            <h3>¡No te pierdas la<br> bonificación gratis!</h3>
            <p>Estatus Silver VIP por 14 días.</p>
            <p>Cuando alcances el nivel 3, <br> recibirás $15,000 en moneda del juego.</p>
            <div class="promo_window_code copy-block">
                <h3 class="copy-trigger">ENGLISH</h3>
                <span class="promo_window_code_copy copy-toggler"></span>
                <span class="promo_window_code_title">Código Promocional</span>
            </div>
            <!-- /.promo_window_code -->
            <a style="display: none" class="promo_window_button launcher_button" href="javascript:void();">
                Descargar launcher
            </a>
            <span class="promo_user_select">Ya tengo un launcher</span>
            <h3>14 Días</h3>
            <h5>Gratis</h5>
        </div>
        <!-- /.promo_window -->
        <div class="window settings_window recovery">
            <div class="window_top">
                <h3>Olvidaste tu Contraseña?</h3>
                <span class="window_close_button"></span>
            </div>
            <!-- /.window_top -->
            <form method="POST" action="javascript:void();">
                @csrf
                <div class="window_section">
                    <h3>Selecciona el servidor</h3>
                    <div class="server_select">
                        <select name="server">
                            <option data-display="" value="1" selected>EE.UU</option>
                            <option value="">Inglés</option>
                        </select>
                    </div>
                    <!-- /.server_select -->
                </div>
                <!-- /.window_section -->
                <div class="window_section">
                    <div class="nickname">
                        <input type="text" name="nickname" placeholder="Inicio de sesión de miembro">
                    </div>
                    <!-- /.nickname -->
                </div>
                <!-- /.window_section -->
                <div class="window_section">
                    <div class="window_field email_field">
                        <input type="text" class="default" name="email_field" placeholder="E-mail"
                            data-validation-type="email">
                    </div>
                    <!-- /.window_field email_field -->
                </div>
                <!-- /.window_section -->
                <button type="submit" name="button">Cambia la contraseña</button>

            </form>
        </div>
        <div class="session ">
            <div class="container default">
                <div class="session_top">
                    <a href="#" class="logo"></a>
                    <div class="session_close"></div>
                </div>
                <!-- /.session_top -->
                <div class="session_content">
                    <div class="session_title">
                        <h3>Iniciar Sesión</h3>
                        <a href="#"><span>Se te olvidó tu contraseña?</span></a>
                    </div>
                    <!-- /.session_title -->
                    <form action="javascript:void();" method="POST" class="login">
                        @csrf
                        <div class="username nickname">
                            <input type="text" name="username" placeholder="Inicio de sesión de miembro">

                        </div>
                        <!-- /.nickname -->
                        <div class="password">
                            <input type="password" class="default" name="password" placeholder="Contraseña">

                        </div>
                        <!-- /.password -->
                        <button name="button" class="continue_button">Entrar</button>

                    </form>
                </div>
                <!-- /.session_content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.session -->
