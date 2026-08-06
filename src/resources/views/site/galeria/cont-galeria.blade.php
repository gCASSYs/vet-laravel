<!-- ANIMALIS: galeria da clínica -->
<div id="galeria" class="section">
    <div class="content-wrap">
        <div class="container">
            <div class="row popup-gallery gutter-5">

                @foreach ($listaGaleria as $linha)

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="box-gallery">

                            <a href="{{ asset('vet/images/' . $linha->imagem) }}"
                                title="{{ $linha->titulo }}">

                                <img src="{{ asset('vet/images/' . $linha->imagem) }}"
                                    alt="{{ $linha->titulo }}"
                                    class="img-fluid">

                                <div class="project-info">
                                    <div class="project-icon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>

                            </a>

                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
