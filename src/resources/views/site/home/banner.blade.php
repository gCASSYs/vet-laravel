<div id="oc-fullslider" class="banner home-hero banner-fixed">

    @foreach ($listaBanner as $linha)

        <div class="item" style="background-image: linear-gradient(rgba(22, 58, 58, 0.55), rgba(22, 58, 58, 0.55)), url('{{ asset('vet/images/' . $linha->imagem) }}');">
            <div class="slider-pos">
                <div class="container">
                    <div class="wrap-caption">

                        <h1 class="caption-heading">
                            {{ $linha->titulo }}
                        </h1>

                        <p>
                            {{ $linha->subtitulo }}
                        </p>

                        <a href="{{ route('contato') }}" class="btn btn-primary">
                            Fale conosco
                        </a>

                    </div>
                </div>
            </div>
        </div>

    @endforeach

</div>

<div class="clearfix"></div>