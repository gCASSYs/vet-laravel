<!-- ANIMALIS: serviços da home -->
<!-- OUR SERVICES -->
<div id="servicos" class="">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <h2 class="section-heading text-center text-primary no-after mb-5">
                        Nossos serviços
                    </h2>

                    <p class="subheading text-center">
                        Soluções veterinárias pensadas para cada etapa da vida do seu pet.
                    </p>

                </div>
            </div>

            <div class="row mt-4">

                <!-- Item 1 -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="rs-image-box">

                        <div class="media">
                            {{-- Link interno: futura página detalhe do serviço --}}
                            <a href="{{ route ('home') }}">
                                <img src="{{ asset ('vet/images/consulta.jpeg') }}" alt="Consulta veterinária" class="img-fluid" loading="lazy" decoding="async">
                            </a>
                        </div>

                        <div class="body-text">
                            <h3 class="title">
                                {{-- Link interno: futura página detalhe do serviço --}}
                                <a href="{{ route ('home') }}">Consultas</a>
                            </h3>
                            Cuidado clínico completo para cães e gatos.
                        </div>

                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="rs-image-box">

                        <div class="media">
                            {{-- Link interno: futura página detalhe do serviço --}}
                            <a href="{{ route ('home') }}">
                                <img src="{{ asset ('vet/images/vacina.jpeg') }}" alt="Vacinação veterinária" class="img-fluid" loading="lazy" decoding="async">
                            </a>
                        </div>

                        <div class="body-text">
                            <h3 class="title">
                                {{-- Link interno: futura página detalhe do serviço --}}
                                <a href="{{ route ('home') }}">Vacinas</a>
                            </h3>
                            Proteção essencial em todas as fases da vida.
                        </div>

                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="rs-image-box">

                        <div class="media">
                            {{-- Link interno: futura página detalhe do serviço --}}
                            <a href="{{ route ('home') }}">
                                <img src="{{ asset ('vet/images/exames.jpeg') }}" alt="Exames veterinários" class="img-fluid" loading="lazy" decoding="async">
                            </a>
                        </div>

                        <div class="body-text">
                            <h3 class="title">
                                {{-- Link interno: futura página detalhe do serviço --}}
                                <a href="{{ route ('home') }}">Exames</a>
                            </h3>
                            Diagnóstico rápido, seguro e preciso.
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 text-center">
                    {{-- Link interno: futura página de serviços --}}
                    <a href="{{ route ('home') }}" class="btn btn-secondary mt-5">
                        Ver mais
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>