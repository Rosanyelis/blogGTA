<!DOCTYPE html>
<html lang="en" class="news_page">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="yandex-verification" content="5e78d15ba3b7a344" />
    <meta name="viewport" content="width=device-width" />
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
                    <h3>Políticas de Privacidad</h3>
                    <div class="fullnews">
                        <p class="privacy_note">
                            This Privacy Policy (hereinafter - Privacy Policy) has been
                            developed under the General Data Protection Policy (hereinafter
                            - GDPR) and is designed to define the processing of personal
                            data and measures to ensure the security of personal data about
                            individuals.
                        </p>
                        <br />
                        <br />
                        <p>
                            <span class="default_high_title">
                                <span>1.</span>Terms and Definitions
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>1.1.</span> Personal data is any information relating
                            directly or indirectly to a specific or identifiable User of the
                            Website.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.2.</span> Website means a set of graphic and information
                            materials, as well as computer programs and databases, ensuring
                            their availability on the website at https://fivelive.net/ on
                            all sub-domains created on its basis.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.3.</span> Processing of personal data shall mean any
                            action (operation) or a set of actions (operations) performed
                            with personal data using automation means or without using such
                            means, including: - collection; - recording; - systematization;
                            - accumulation; - storage; - clarification (update, change); -
                            extraction; - use; - transfer (distribution, provision, access);
                            - depersonalization; - blocking; - removal; - destruction of
                            personal data.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.4.</span> Automated processing of personal data shall
                            mean processing of personal data by hardware means.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.5.</span> Dissemination of personal data shall mean
                            actions aimed at disclosure of personal data to an indefinite
                            number of persons
                        </p>
                        <p class="default_spaced_item">
                            <span>1.6.</span> Provision of personal data shall mean actions
                            aimed at disclosure of personal data to a certain person or a
                            certain circle of persons.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.7.</span> Blocking of personal data shall mean temporary
                            termination of personal data processing (except for cases when
                            processing is necessary to clarify personal data).
                        </p>
                        <p class="default_spaced_item">
                            <span>1.8.</span> Destruction of personal data shall mean
                            actions resulting in the impossibility to restore the content of
                            personal data in the information system of personal data and
                            (or) as a result of which tangible media of personal data are
                            destroyed.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.9.</span> De-identification of personal data shall mean
                            actions, as a result of which it becomes impossible, without the
                            use of additional information, to determine the attribution of
                            personal data to a specific data subject.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.10.</span> Information system of personal data shall
                            mean a set of information technologies and technical means
                            contained in personal data bases and ensuring processing of
                            personal data.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.11.</span> Cross-border transfer of personal data shall
                            mean a transfer of personal data to the territory of a foreign
                            state to a foreign authority, foreign individual, or foreign
                            legal entity.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.12.</span> Personal Data Operator shall mean Brazy
                            Portugal Ltd, independently or together with other persons
                            organizing and (or) performing processing of personal data, as
                            well as determining the purpose of personal data processing, the
                            composition of personal data to be processed, actions
                            (operations) performed with personal data.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.13.</span> Data Subject shall mean an individual to whom
                            the relevant personal data relates.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.14.</span> User shall mean a natural person to whom the
                            relevant personal data relates who is browsing the content of
                            the website and/or using the functionality of the site for
                            his/her own benefit or for the benefit of the legal entity
                            he/she represents.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.15.</span> Subdomain shall mean the pages or the set of
                            pages located on tertiary domains belonging to
                            https://fivelive.net/, as well as other temporary pages with
                            contact information of the Operator at the bottom.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.16.</span> Cookies shall mean a small piece of data sent
                            by a web service and stored on the computer of the data subject,
                            which the browser sends each time the web server in HTTP-request
                            when trying to open the page of the relevant website.
                        </p>
                        <p class="default_spaced_item">
                            <span>1.17.</span> IP-address shall mean a unique network
                            address of a node in a computer network, through which the data
                            subject accesses the Website.
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>2.</span>General provisions
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>2.1.</span> Information about the Operator:
                        </p>
                        <p class="default_spaced_item">
                            <span>2.1.1.</span> The Operator is FiveLive Owned. The operator
                            Brazy Portugal.
                        </p>
                        <p class="default_spaced_item">
                            <span>2.2.</span> The current version of this Privacy Policy is
                            available on the Operator’s website at:
                            https://fivelive.net/policy. All categories of data subjects
                            covered by this Privacy Policy are required to familiarize
                            themselves with the text of this Privacy Policy.
                        </p>
                        <p class="default_spaced_item">
                            <span>2.3.</span> Transfer of personal information by the data
                            subject shall mean the unconditional consent of the User to the
                            terms of this Privacy Policy and the terms of processing of his
                            personal data specified herein. In case of disagreement with the
                            terms of the Privacy Policy, the data subject must refrain from
                            transferring personal information to the Operator.
                        </p>
                        <p class="default_spaced_item">
                            <span>2.4.</span> The Privacy Policy (including any part
                            thereof) may be changed by the Operator without any special
                            notice and any compensation being paid in connection therewith.
                            The new version of the Privacy Policy shall come into force as
                            soon as it is posted on the Operator's website.
                        </p>
                        <p class="default_spaced_item">
                            <span>2.5.</span> By accepting the terms of the Privacy Policy,
                            the data subject expresses his/her consent to the processing of
                            data about him/her by the Operator for the purposes provided by
                            the Privacy Policy, as well as to the transfer of data about the
                            data subject to third parties in the cases listed in the Privacy
                            Policy.
                        </p>
                        <p class="default_spaced_item">
                            <span>2.6.</span> The use of the Website, its services through a
                            web browser that accepts cookies shall mean the consent of the
                            data subject to the fact that the Operator may collect and
                            process data from cookies in order to improve the Website, its
                            content, and functionality. Disabling and/or blocking by the
                            data subject the option of the web browser to receive data from
                            cookies means that the data subject’s use of the Website may be
                            restricted, in particular some of its functions.
                        </p>
                        <p class="default_spaced_item">
                            <span>2.7.</span> The Operator does not verify the accuracy of
                            personal information provided by the data subject.
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>3.</span>Composition of information about the Users of
                                the website, which is received and processed by the Operator
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>3.1.</span> This Privacy Policy applies to the following
                            types of personal information:
                        </p>
                        <p class="default_spaced_item">
                            <span>3.1.1.</span> Personal information posted by Users,
                            including personal information about themselves when filling out
                            the form on the website. Personal information obtained in this
                            way may include, but is not limited to ∙ identification data
                            (name, surname of the User); ∙ contact data (e-mail address); ∙
                            other personal information to which the User grants access to
                            the Operator at the Operator's discretion. It is forbidden for
                            the User to provide personal data of third parties without the
                            permission thereof for such distribution or if such personal
                            data of third parties were not received by the User from
                            publicly available information sources.
                        </p>
                        <p class="default_spaced_item">
                            <span>3.1.2.</span> Data automatically transmitted to the
                            Website in the course of the use thereof through the software
                            installed on the User’s device, including IP-address, individual
                            network number of the device (MAC-address, device ID),
                            electronic serial number (IMEI, MEID), cookies, information
                            about the browser, operating system, access time, and User
                            search queries.
                        </p>
                        <p class="default_spaced_item">
                            <span>3.1.3.</span> The data additionally provided by the Users
                            upon the Operator's request in order to fulfil the Operator's
                            obligations to the Users in relation to the use of the Website.
                        </p>
                        <p class="default_spaced_item">
                            <span>3.1.4.</span> Other information about Users, collection
                            and/or processing of which is stipulated in the agreement.
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>4.</span>Purposes of collecting and processing
                                information about Website Users
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>4.1.</span> The operator collects and processes only the
                            information about the Users, including their personal data,
                            which is relevant for achieving the following objectives:
                        </p>
                        <p class="default_spaced_item">
                            <span>4.1.1.</span> In connection with the use of the Operator’s
                            website.
                        </p>
                        <p class="default_spaced_item">
                            <span>4.1.2.</span> Sending requests regarding using the
                            Website, informing Users about new services on the Website,
                            informing via electronic mailing lists, including about new
                            promotions, offers, and recommendations about services,
                            contests, and news of the Operator (including offers to leave a
                            review or take a poll). By providing their data User agrees to
                            receive advertising and information messages, and service
                            messages (mailing list).
                        </p>
                        <p class="default_spaced_item">
                            <span>4.1.3.</span> Performance of marketing tasks, statistical
                            and other research based on impersonal data, to improve the
                            Website, marketing, relationships with Users, as well as further
                            improvement, development of new services.
                        </p>
                        <p class="default_spaced_item">
                            <span>4.1.4.</span> Communication with the User to fulfil
                            contractual obligations, informing Users about the appearance of
                            new services on the Website, informing by means of electronic
                            mailing lists, including new offers and recommendations about
                            services, contests, and news of the Operator. By submitting
                            their data, the User agrees to be notified by telephone.
                        </p>
                        <p class="default_spaced_item">
                            <span>4.1.5.</span> To administer and protect the Website,
                            including troubleshooting, data analysis, testing, system
                            maintenance, support, reporting, and data hosting.
                        </p>
                        <p class="default_spaced_item">
                            <span>4.2.</span> If it is necessary to use personal information
                            about the User for the purposes not stipulated by the Privacy
                            Policy, the Operator requests the User’s consent for such
                            actions.
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>5.</span>Legal basis for personal data processing
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>5.1.</span> The Privacy Policy has been developed in
                            accordance with the EU Regulation 2016/679 and local relevant
                            legislations.
                        </p>
                        <p class="default_spaced_item">
                            <span>5.2.</span> We may disclose your information, including
                            personal information, to courts, law enforcement or governmental
                            authorities, or authorized third parties, if and to the extent
                            we are required or permitted to do so by law or if such
                            disclosure is reasonably necessary:
                        </p>
                        <ul class="privacy_list">
                            <li>To comply with our legal obligations;</li>
                            <li>
                                To comply with legal process and to respond to claims asserted
                                against us;
                            </li>
                            <li>
                                To respond to requests relating to a criminal investigation or
                                alleged or suspected illegal activity or any other activity
                                that may expose us, you, or any other of our users to legal
                                liability;
                            </li>
                            <li>To enforce and administer our Terms of Service, or</li>
                            <li>
                                To protect our and our employees’ rights, property or personal
                                safety.
                            </li>
                        </ul>
                        <p class="default_spaced_item">
                            <span>5.3.</span> Legal basis for processing personal data: -
                            consent to the processing of personal data;
                        </p>
                        <p class="default_spaced_item">
                            <span>5.4.</span> The operator processes personal information,
                            including personal data, only in the following cases:
                        </p>
                        <p class="default_spaced_item">
                            <span>5.4.1.</span> processing is necessary for fulfilling the
                            Operator’s obligations to the data subjects.
                        </p>
                        <p class="default_spaced_item">
                            <span>5.4.2.</span> processing is necessary to comply with
                            statutory obligations.
                        </p>
                        <p class="default_spaced_item">
                            <span>5.4.3.</span> when it is required by applicable law,
                            processing is necessary to ensure the Operator's legitimate
                            interests if such processing does not have a significant impact
                            on the interests, fundamental rights, and freedoms of the data
                            subjects. When processing personal information on this basis,
                            the Operator will always seek to maintain a balance between its
                            legitimate interests and protecting the confidentiality of the
                            data subject.
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>6.</span>Processing of personal data of the data
                                subjects
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>6.1.</span> In most cases, personal data is processed
                            automatically without access to it by the Operator. If such
                            access is required, it can be provided only to the persons who
                            need it to complete their tasks. To protect and ensure the
                            confidentiality of data, all persons must comply with internal
                            policies and procedures regarding the processing of Personal
                            Data. They must also follow all technical and organizational
                            security measures in place to protect personal data.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.2.</span> The operator has implemented sufficient
                            technical and organizational measures to protect personal data
                            from an unauthorized, accidental or unlawful destruction, loss,
                            modification, unfair use, disclosure or access, as well as other
                            unlawful forms of processing. These security measures have been
                            implemented taking into account the state of the art, the cost
                            of their implementation, the risks associated with the
                            processing and the nature of personal data, including the
                            following measures: ∙ anti-virus protection with updated
                            databases; ∙ information backup; ∙ limitation of persons having
                            access to the equipment; ∙ designation of a person responsible
                            for personal data processing.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.3.</span> Personal data shall be stored by the Operator
                            for as long as it is necessary to achieve the purpose for which
                            it was collected, or to comply with the requirements of laws and
                            regulations.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.4.</span> Personal information about the data subjects
                            shall not be transferred to third parties, except in the
                            following cases:
                        </p>
                        <p class="default_spaced_item">
                            <span>6.4.1.</span> The data subject has consented to such
                            actions.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.4.2.</span> If the Operator participates in a merger,
                            acquisition or any other form of sale of some or all of its
                            assets. In this case, all obligations to comply with the terms
                            of the Privacy Policy shall be transferred to the acquirer of
                            the Operator's assets.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.5.</span> The Data Subject is hereby notified and agrees
                            that the Operator may receive personal data of third parties,
                            which are provided by the Data Subject when using the Website,
                            and use them to implement certain functions of the Website,
                            provided that the Data Subject guarantees the consent of third
                            parties, whose data are provided by the Data Subject when using
                            the Website, for the data to be processed by the Operator, for
                            the purposes provided by the Privacy Policy, as well as to
                            transfer such data in the cases listed in the Privacy Policy.
                        </p>
                        <p class="default_spaced_item">
                            <span>6.6.</span> The data subject of personal data has the
                            right to receive, upon request, information from the Operator
                            concerning the processing of their personal data
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>7.</span>Procedure for withdrawal of consent to personal
                                data processing, updating and correction of personal data,
                                responses to requests for access to personal data
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>7.1.</span> The data subject shall have the right to
                            withdraw at any time the consent and authorization provided for
                            processing of personal data by sending an email to
                            fivelivenet@gmail.com.
                        </p>
                        <p class="default_spaced_item">
                            <span>7.2.</span> The data subject shall have the right to
                            request deletion, correction, updating of personal data, to
                            request the restriction of personal data processing or to object
                            to the processing of personal data when required by law. The
                            Operator shall respond to these requests in accordance with the
                            law.
                        </p>
                        <p class="default_spaced_item">
                            <span>7.3.</span> The User shall send inquiries and complaints
                            to the Operator at the contacts specified in this Privacy
                            Policy.
                        </p>
                        <p class="default_spaced_item">
                            <span>7.4.</span> If it is confirmed that the personal data is
                            inaccurate or unlawful, the personal data shall be updated by
                            the Operator and the processing shall be terminated.
                        </p>
                        <p class="default_spaced_item">
                            <span>7.5.</span> The Operator shall be obliged to inform the
                            user or his representative about the processing of his/her
                            personal data upon their request.
                        </p>
                        <p class="default_spaced_item">
                            <span>7.6.</span> When the purposes of personal data processing
                            have been achieved, as well as in case of withdrawal of the
                            User’s consent to processing thereof, the personal data shall be
                            destroyed: - unless otherwise provided for in an agreement to
                            which the data subject on the grounds stipulated by GDPR and
                            other local legislations - unless otherwise provided by other
                            agreement between the Operator and the data subject.
                        </p>
                        <p>
                            <span class="default_high_title">
                                <span>8.</span>Final provisions
                            </span>
                        </p>
                        <p class="default_spaced_item">
                            <span>8.1.</span> Privacy Policy, relations between the data
                            subject and the Operator, arising in connection with the
                            application of the Privacy Policy, as well as issues not
                            regulated by the Privacy Policy shall be governed by the
                            applicable laws of EU and GDPR.
                        </p>
                        <p class="default_spaced_item">
                            <span>8.2.</span> Data subjects may send requests, suggestions
                            or questions regarding this Privacy Policy to the Operator at
                            fivelivenet@gmail.com.
                        </p>

                        <br /><br />
                        <p class="privacy_note">Revision dated 31.05.2022</p>
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
