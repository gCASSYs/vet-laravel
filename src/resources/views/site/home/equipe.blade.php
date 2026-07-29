<!-- ANIMALIS: equipe da home -->
<!-- MEET VETERINARY -->
<div id="veterinary" class="section-border">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <h2 class="section-heading text-center text-primary no-after mb-5">
                        Conheça a equipe
                    </h2>

                    <p class="subheading text-center">
                        Profissionais preparados para cuidar com técnica, atenção e acolhimento.
                    </p>

                </div>
            </div>

            <div class="row mt-4">

                @foreach ($listaEquipe as $linha)

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="rs-team-1">

                            <div class="media">
                                <img src="{{ asset('vet/images/' . $linha->imagem) }}"
                                    alt="{{ $linha->nome }}"
                                    class="img-fluid"
                                    loading="lazy"
                                    decoding="async">

                                <div class="sosmed-icon">

                                    {{-- Link externo: Facebook --}}
                                    <a href="{{ $linha->facebook ?? '#' }}">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    {{-- Link externo: Instagram --}}
                                    <a href="{{ $linha->instagram ?? '#' }}">
                                        <i class="fa fa-instagram"></i>
                                    </a>

                                    {{-- Link externo: WhatsApp --}}
                                    <a href="{{ $linha->whatsapp ?? '#' }}">
                                        <img src="{{ asset('vet/images/whatsapp.svg') }}"
                                            alt="WhatsApp"
                                            class="social-icon-svg"
                                            loading="lazy"
                                            decoding="async">
                                    </a>

                                </div>
                            </div>

                            <div class="body">
                                <div class="title">
                                    {{ $linha->nome }}
                                </div>

                                <div class="text-primary">
                                    {{ $linha->cargo }}
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 text-center">
                    {{-- Link interno: página de contato --}}
                    <a href="{{ route('contato') }}" class="btn btn-secondary mt-5">
                        Conheça mais
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>