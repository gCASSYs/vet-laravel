<!-- LOAD PAGE -->
<div class="animationload">
    <div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="#0" class="cd-top cd-is-visible cd-fade-out">Topo</a>

<!-- HEADER -->
<div class="header header-1">

    <!-- TOP BAR -->
    <div class="topbar d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-sm-6 col-md-6">
                    <p class="mb-0">Cuidado veterinário com carinho, atenção e confiança.</p>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="sosmed-icon d-inline-flex pull-right">
                        <a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" aria-label="WhatsApp"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- MIDDLE BAR -->
    <div class="middlebar d-none d-sm-block">
        <div class="container">

            <div class="contact-info">

                <!-- INFO HORÁRIO -->
                <div class="box-icon-1">
                    <div class="icon">
                        <div class="fa fa-clock-o"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Horário de Funcionamento</div>
                        Emergência e internação 24 horas
                    </div>
                </div>

                <!-- INFO TELEFONE -->
                <div class="box-icon-1">
                    <div class="icon">
                        <div class="fa fa-phone"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Telefone</div>
                        2555-5555 / (11) 99999-9999
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar-main">
        <div class="container">
            <nav id="navbar-example" class="navbar navbar-expand-lg">

                <!-- LOGO -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span class="brand-logo">
                        <i class="fa fa-paw" aria-hidden="true"></i>
                        <span>
                            <strong>Animalis</strong>
                            <small>Clínica Veterinária</small>
                        </span>
                    </span>
                </a>

                <!-- BOTÃO MOBILE -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Abrir menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENU PRINCIPAL -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav">

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">INÍCIO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">SOBRE</a>
                        </li>

                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="{{ route('home') }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SERVIÇOS
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('home') }}">Consultas</a>
                                <a class="dropdown-item" href="{{ route('home') }}">Vacinas</a>
                                <a class="dropdown-item" href="{{ route('home') }}">Exames</a>
                                <a class="dropdown-item" href="{{ route('home') }}">Cirurgias</a>
                                <a class="dropdown-item" href="{{ route('home') }}">Internação</a>
                                <a class="dropdown-item" href="{{ route('home') }}">Emergência</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">DÚVIDAS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">GALERIA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">CONTATO</a>
                        </li>

                    </ul>

                    <!-- Botão principal -->
                    <a href="{{ route('home') }}" class="btn btn-secondary btn-nav btn-rect ml-auto">
                        FALE CONOSCO
                    </a>

                </div>

            </nav>
        </div>
    </div>

</div>