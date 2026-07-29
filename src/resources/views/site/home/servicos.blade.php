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

                @foreach ($listaServico as $linha)

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="rs-image-box">

                            <div class="media">
                                {{-- Link interno: página de serviços --}}
                                <a href="{{ route('servicos') }}">
                                    <img src="{{ asset('vet/images/' . $linha->imagem) }}"
                                        alt="{{ $linha->nome }}"
                                        class="img-fluid"
                                        loading="lazy"
                                        decoding="async">
                                </a>
                            </div>

                            <div class="body-text">
                                <h3 class="title">
                                    {{-- Link interno: página de serviços --}}
                                    <a href="{{ route('servicos') }}">
                                        {{ $linha->nome }}
                                    </a>
                                </h3>

                                {{ $linha->descricao_curta }}
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 text-center">
                    {{-- Link interno: página de serviços --}}
                    <a href="{{ route('servicos') }}" class="btn btn-secondary mt-5">
                        Ver mais
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>