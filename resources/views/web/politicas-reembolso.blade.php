<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="5e78d15ba3b7a344" />
    <meta name="viewport" content="width=device-width">

    <title>GTA Latam — Descubre el juego!</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/scroll.css') }}" />
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
<body class="redirecting loaded inner_page_loaded news_page">
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
            <!-- /.navigation_window -->

        </div>

        <div class="shop game_shop">
            <div class="container default">
                <div class="news_page_row">
                    <a href="{{ url('/') }}" class="default_back_button linkout">Regresar</a>
                    <h3>Políticas de Reembolso</h3>
                    <div class="fullnews">
                        <p>
                            <span class="default_high_title">
                                <span>1.</span> Refund Policy
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>1.1.</span> This Refund Policy (hereinafter referred to as “the Policy”) shall define
                            the conditions and procedure of money refund to the Customer who had paid for the services
                            of additional bonuses acquisition provided by the Offer posted at:
                            https://fivelive.net//docs/contract.pdf (hereinafter referred to as “the Offer”) - General
                            provisions - The money paid for the services of additional bonuses acquisition provided by
                            the Offer can be returned in case of non-use of the game currency for the game character.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.2.</span> This Policy is a public offer pursuant to Portugal legislations and
                            unconditional acceptance of the Offer shall mean the registration on the website
                            fivelive.net in accordance with the terms of the Offer. Agreement between the Contractor and
                            the Customer on the terms and conditions of this offer shall enter into force from the date
                            when the Customer accepts the offer in the manner prescribed in this paragraph.
                        </p>

                        <p class="default_spaced_item">
                            <span>1.3.</span> The current version of the Policy is available at:
                            https://fivelive.net/contract
                        </p>
                        <p class="default_spaced_item">
                            <span>1.4.</span> Processing of Customers’ personal data shall be carried out in accordance
                            with the Personal Data Processing Policy available at: https://fivelive.net/policy.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.5.</span> The terms and definitions used in the Policy are similar to the terms and
                            definitions used in the Offer posted at fivelive.net
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>2.</span> Refund procedure - the Contractor has established the following refund procedure:
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>2.1.</span> The Customer shall send a scanned copy of the refund application to email:
                        </p>
                        <ul class="privacy_list">
                            <li>
                                support@fivelive.net to the Contractor, which shall include the following information:
                                Customer's full name, passport data (series, number); date of payment;
                            </li>
                            <li>
                                the amount of payment unused for services on additional bonuses acquisition;
                            </li>
                            <li>
                                data of card or e-wallet from which the payment was made. A copy of the payment document
                                (cheque) must be attached to the application.
                            </li>

                        </ul>

                        <p class="default_spaced_item">
                            <span>2.2.</span> The application must be signed by the Customer or his representative
                            authorized by power of attorney. In case the application is signed by the Customer’s
                            representative, a copy of the application shall be attached to the application.
                        </p>

                        <p class="default_spaced_item">
                            <span>2.3.</span>The Contractor shall review the application within ten (10) days of receipt
                            of the relevant application.
                        </p>
                        <p class="default_spaced_item">
                            <span>2.4.</span> In case the application meets all requirements, the Contractor shall send
                            its bank (payment system) an order to transfer funds to the card or e-wallet from which the
                            payment was made. Terms of refund depend on the bank of the Contractor and the Customer. The
                            Contractor shall not be held liable for the violation of the terms of a refund due to
                            violation of the terms of funds transfer by the banks (payment systems). The Contractor
                            shall be entitled to refuse a refund if the personal data of the Customer who had applied
                            cannot be reliably ascertained. In this case, the Contractor shall inform the Customer of
                            the need to provide relevant data and the subsequent process of consideration of the
                            application for a refund. In such a case, the Customer may resubmit a corrected application.

                        </p>

                        <p>
                          <span class="default_high_title">
                            <span>3.</span> Liability of the Parties
                          </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>3.1.</span> Liability for non-performance or improper performance of obligations under
                            this Agreement shall be determined in accordance with Portugal legislation.

                        </p>
                        <p class="default_spaced_item">
                            <span>3.2.</span> Contractor shall not be liable for temporary malfunctions and breaks in
                            the Website operation, any damage to hardware, computer programs or information connected
                            with the use of the Website, and also for actions of banks and payment systems.

                        </p>
                        <p>
                          <span class="default_high_title">
                            <span>4.</span> Term of Agreement Termination of the Agreement
                          </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>4.1.</span> the Agreement on the terms and conditions of this offer shall take effect
                            from the date of acceptance of the offer by the Customer and shall remain in force until the
                            Parties perform their obligations in full.

                        </p>
                        <p>
                          <span class="default_high_title">
                            <span>5.</span> Force Majeure
                          </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>5.1.</span> the Parties shall be relieved of liability for partial or full failure to
                            perform their obligations hereunder if such failure is a direct consequence of force majeure
                            arising after the conclusion of this Agreement, as a result of extraordinary events, namely:
                            fire, flood, hurricane and earthquake or imposition of restrictions on activities by any
                            Party and other similar circumstances, if such restrictions could neither bee foreseen nor
                            prevented by reasonable measures of the Parties

                        </p>
                        <p>
                          <span class="default_high_title">
                            <span>6.</span> Other terms and conditions
                          </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>6.1.</span> Acceptance of the terms of this Agreement shall mean an operating with
                            this site.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.23.</span> By submitting an application for a refund, the Customer authorizes the
                            Contractor to process: collect, record, systematize, accumulate, store, specify (update,
                            modify), extract, use, transfer (including to instruct other persons to process), anonymize,
                            block, delete, destroy, the personal data listed in Clause 6.1.3 of the Agreement.

                        </p>
                        <p class="default_spaced_item">
                            <span>6.3.</span> The consent shall be valid from the date of communication of the data by
                            the Customer until revoked by the Customer. Withdrawal involves sending a document
                            requesting the Contractor to stop processing personal data. Consent to the processing of
                            personal data specified in clause 6.1.3. of the Agreement shall be provided by the Customer
                            to the Contractor, including to fulfil obligations that have arisen or may arise with the
                            Contractor during the performance of this Agreement, including but not limited to: — the
                            Contractor and/or its authorized representatives’ contacts with the Customer.

                        </p>


                        <p class="default_spaced_item">
                            <span>6.4.</span> Personal data that the Customer provides to the Contractor:

                        </p>
                        <ul class="privacy_list">
                            <li>
                                Customer's name, surname, patronymic;
                            </li>
                            <li>
                                Customer's passport data;
                            </li>
                            <li>
                                Bank card or electronic wallet details;
                            </li>
                            <li>
                                Customer's e-mail address;
                            </li>
                        </ul>
                        <p class="default_spaced_item">
                            <span>6.5.</span> In case any provision or any part of the provisions of this offer is
                            declared invalid or unenforceable, the remaining provisions and parts of the contract remain
                            in full force and effect.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.6.</span> All notifications and legally relevant messages should be communicated to
                            the Contractor at the e-mail address: <a href="mailto:support@fivelive.net"
                                                                     class="default_link">support@fivelive.net</a>. -
                            This offer, as well as issues not regulated by it, shall be governed by the applicable laws
                            of the Russian Federation.
                        </p>

                        <br>
                        <br>
                        <p class="privacy_note">
                            Revision dated 31.05.2022
                        </p>
                    </div>
                    <!-- /.fullnews -->
                </div>
                <!-- /.news_page_row -->
            </div>
            <!-- /.container default -->
        </div>

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
                                    <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"
                                            class="facebook"></a></li>
                                @endif
                                @if ($item->nombre == 'Twitter')
                                    <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"
                                            class="twitter"></a></li>
                                @endif
                                @if ($item->nombre == 'Instagram')
                                    <li><a href="@if ($item->url != null) {{ $item->url }} @else javascript:void(); @endif"
                                            class="instagram"></a></li>
                                @endif
                                @if ($item->nombre == 'YouTube')
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


</html>
