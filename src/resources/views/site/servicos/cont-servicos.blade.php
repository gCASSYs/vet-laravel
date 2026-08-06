<!-- ANIMALIS: cards de serviços -->
<!-- CONTENT -->
<div id="class" class="">
    <div class="content-wrap">
        <div class="container">

            <div class="row">

                @foreach ($listaServico as $linha)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="rs-image-box">

                        <div class="media">
                            {{-- Link interno: futura página de detalhe do serviço --}}
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
                                {{-- Link interno: futura página de detalhe do serviço --}}
                                <a href="{{ route('servicos') }}">{{ $linha->nome }}</a>
                            </h3>

                            {{ $linha->descricao_curta }}
                        </div>

                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
