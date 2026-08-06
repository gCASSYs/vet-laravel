<!-- ANIMALIS: página de dúvidas frequentes -->
<div class="section">
    <div class="content-wrap">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <h2 class="section-heading text-center text-primary mb-4">
                        Dúvidas frequentes
                    </h2>

                    <p class="subheading text-center">
                        Veja as principais orientações sobre atendimento, vacinas, exames e agendamentos.
                    </p>

                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-12 col-md-10 offset-md-1">

                    <div class="accordion rs-accordion" id="accordionFaq">

                        @foreach ($listaFaq as $linha)

                            <div class="card mb-3">

                                <div class="card-header" id="pergunta{{ $linha->id_faq }}">
                                    <h3 class="title">

                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#resposta{{ $linha->id_faq }}"
                                            aria-expanded="false"
                                            aria-controls="resposta{{ $linha->id_faq }}">

                                            {{ $linha->pergunta }}

                                        </button>

                                    </h3>
                                </div>

                                <div id="resposta{{ $linha->id_faq }}" class="collapse"
                                    aria-labelledby="pergunta{{ $linha->id_faq }}"
                                    data-parent="#accordionFaq">

                                    <div class="card-body">

                                        <strong>{{ $linha->categoria }}</strong>

                                        <p class="mt-2 mb-0">
                                            {{ $linha->resposta }}
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
