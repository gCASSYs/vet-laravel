<!-- ANIMALIS: indicadores da home -->
<!-- FUN FACT -->
<div class="section funfact-section">
    <div class="content-wrap">
        <div class="container">

            <div class="row">

                @foreach ($listaIndicador as $linha)

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="rs-icon-funfact style-2 text-white">

                            <div class="icon">
                                <i class="fa {{ $linha->icone }}"></i>
                            </div>

                            <div class="body-content">
                                <h2>{{ $linha->numero }}</h2>

                                <p class="uk16 text-primary">
                                    {{ $linha->titulo }}
                                </p>
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>
</div>