<!-- ANIMALIS: depoimentos da home -->
<!-- HAPPY CLIENTS -->
<div class="section testimonials-section">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <h2 class="section-heading text-center text-primary mb-4">
                        O que dizem os tutores
                    </h2>

                    <p class="subheading text-center">
                        Confiança construída em cada atendimento e em cada cuidado.
                    </p>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-10 offset-md-1">

                    <div id="testimonial">

                        @foreach ($listaDepo as $linha)

                            <div class="item">
                                <div class="rs-box-testimony">
                                    <div class="quote-box">

                                        <blockquote class="text-black">
                                            {{ $linha->mensagem }}
                                        </blockquote>

                                        <p class="quote-name">
                                            {{ $linha->DepoimentoCliente->nome ?? 'Tutor Animalis' }}
                                            <span>{{ $linha->tipo_cliente }}</span>
                                        </p>

                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>