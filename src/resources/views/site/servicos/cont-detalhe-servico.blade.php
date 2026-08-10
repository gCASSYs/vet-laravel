<!-- ANIMALIS: detalhe dinâmico do serviço -->
<!-- CONTENT -->
<div id="class" class="">
    <div class="content-wrap">
        <div class="container">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-4 order-last">

                    <div class="widget categories">
                        <ul class="category-nav">

                            @foreach ($listaServico as $itemServico)

                                <li class="{{ $servico->slug == $itemServico->slug ? 'active' : '' }}">
                                    <a href="{{ route('servicos.detalhe', $itemServico->slug) }}">
                                        {{ $itemServico->nome }}
                                    </a>
                                </li>

                            @endforeach

                        </ul>
                    </div>

                    <div class="promo-ads bg-secondary">
                        <div class="content text-white">

                            <h4 class="title text-primary">
                                Horário de atendimento
                            </h4>

                            @if ($servico->ServicoHorario->count() > 0)

                                @foreach ($servico->ServicoHorario as $horario)

                                    @if (!empty($horario->observacao))
                                        <p>
                                            {{ $horario->observacao }}
                                        </p>
                                    @endif

                                    <ul class="list-unstyled">
                                        <li>
                                            {{ $horario->dia_semana }}:

                                            @if ($horario->atendimento_24h == 1)
                                                24 horas
                                            @else
                                                {{ substr($horario->horario_inicio, 0, 5) }}
                                                às
                                                {{ substr($horario->horario_fim, 0, 5) }}
                                            @endif
                                        </li>
                                    </ul>

                                @endforeach

                            @else

                                <p>
                                    Consulte nossa equipe para verificar os horários disponíveis.
                                </p>

                            @endif

                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-8">

                    <img src="{{ asset('vet/images/' . $servico->imagem) }}"
                        alt="{{ $servico->nome }}"
                        class="img-fluid"
                        decoding="async">

                    <h2 class="section-heading text-primary no-after mb-4">
                        {{ $servico->nome }}
                    </h2>

                    <p class="text-black lead">
                        {{ $servico->descricao_curta }}
                    </p>

                    @if ($servico->ServicoDetalhe->count() > 0)

                        @foreach ($servico->ServicoDetalhe as $index => $detalhe)

                            @if ($index < 2)

                                @if (!empty($detalhe->subtitulo))
                                    <p>
                                        {{ $detalhe->subtitulo }}
                                    </p>
                                @endif

                                <p>
                                    {{ $detalhe->conteudo }}
                                </p>

                            @endif

                        @endforeach

                    @endif

                    <div class="spacer-10"></div>

                    <h2 class="section-heading text-primary no-after mb-4">
                        Como cuidamos
                    </h2>

                    <div class="accordion rs-accordion" id="accordionExample">

                        @foreach ($servico->ServicoDetalhe as $index => $detalhe)

                            @php
                                $numero = $index + 1;
                                $headingId = 'heading' . $numero;
                                $collapseId = 'collapse' . $numero;
                            @endphp

                            <div class="card">

                                <div class="card-header" id="{{ $headingId }}">
                                    <h3 class="title">
                                        <button class="btn btn-link {{ $index != 0 ? 'collapsed' : '' }}"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#{{ $collapseId }}"
                                            aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                            aria-controls="{{ $collapseId }}">

                                            {{ $detalhe->titulo }}

                                        </button>
                                    </h3>
                                </div>

                                <div id="{{ $collapseId }}"
                                    class="collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="{{ $headingId }}"
                                    data-parent="#accordionExample">

                                    <div class="card-body">

                                        @if (!empty($detalhe->subtitulo))
                                            <p>
                                                <strong>{{ $detalhe->subtitulo }}</strong>
                                            </p>
                                        @endif

                                        <p>
                                            {{ $detalhe->conteudo }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>
                    <!-- end accordion -->

                </div>

            </div>

        </div>
    </div>
</div>
