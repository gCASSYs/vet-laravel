<!-- ANIMALIS: equipe da home -->
<div id="equipe">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <h2 class="section-heading text-center text-primary no-after mb-5">
                        Nossa equipe
                    </h2>

                    <p class="subheading text-center">
                        Profissionais preparados para cuidar do seu pet com atenção, responsabilidade e carinho.
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
                                    class="img-fluid">
                            </div>

                            <div class="body">
                                <div class="title">
                                    {{ $linha->nome }}
                                </div>

                                <div class="position">
                                    {{ $linha->cargo }}
                                </div>

                                <p>
                                    {{ $linha->descricao }}
                                </p>

                                <div class="sosmed-icon d-inline-flex">

                                    @if (!empty($linha->facebook))
                                        <a href="{{ $linha->facebook }}" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    @endif

                                    @if (!empty($linha->instagram))
                                        <a href="{{ $linha->instagram }}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    @endif

                                    @if (!empty($linha->whatsapp))

                                        @php
                                            $numeroWhatsapp = preg_replace('/\D/', '', $linha->whatsapp);

                                            if (strlen($numeroWhatsapp) == 11) {
                                                $numeroWhatsapp = '55' . $numeroWhatsapp;
                                            }
                                        @endphp

                                        <a href="https://wa.me/{{ $numeroWhatsapp }}" target="_blank">
                                            <i class="fa fa-phone"></i>
                                        </a>

                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>
</div>