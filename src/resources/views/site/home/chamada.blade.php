<!-- ANIMALIS: chamada institucional da home -->
<!-- DO PETS -->
<div class="section bgi-cover-center institutional-video-section" data-background="{{ asset ('vet/images/img_back_video.jpeg') }}">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wrap-form">

                        <h2 class="text-secondary mb-2">
                            Seu pet precisa de acompanhamento veterinário?
                        </h2>

                        <p class="uk21 text-white">
                            A Animalis oferece orientação clínica, prevenção e acompanhamento com atendimento humanizado.
                        </p>

                        <p class="text-white">
                            Conte com a nossa equipe para esclarecer dúvidas, acompanhar sintomas e indicar o melhor
                            cuidado para o seu animal com responsabilidade e atenção.
                        </p>

                        <div class="spacer-30"></div>

                        {{-- Link interno: futura página sobre --}}
                        <a href="{{ route ('home') }}" class="btn btn-secondary institutional-cta">
                            Conheça mais
                        </a>

                        <div class="spacer-30"></div>

                        <div class="row">
                            <div class="col-sm-8 col-md-8">
                                <div class="img-video">

                                    {{-- Link externo: vídeo do YouTube --}}
                                    <a href="https://www.youtube.com/watch?v=OurTI0PrSR8" class="popup-youtube play-video">
                                        <i class="fa fa-play fa-2x"></i>
                                    </a>

                                    <img src="{{ asset ('vet/images/img_video.png') }}" alt="Apresentação da clínica Animalis" class="shadow img-fluid" loading="lazy" decoding="async">

                                    <div class="ripple"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>