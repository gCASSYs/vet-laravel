<!-- ANIMALIS: informações e formulário de contato -->
<!-- CONTENT -->
<div class="section pt-0">
    <div class="content-wrap pt-0">
        <div class="container">

            @php
                $numeroWhatsapp = preg_replace('/\D/', '', $configuracao->whatsapp);

                if (strlen($numeroWhatsapp) == 11) {
                    $numeroWhatsapp = '55' . $numeroWhatsapp;
                }
            @endphp

            <div class="row mt-4">

                <!-- Item 1 -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="rs-icon-info-4 mb-5">
                        <div class="icon">
                            <i class="fa fa-smile-o"></i>
                        </div>

                        <div class="body">
                            <h3 class="title">Endereço</h3>
                            <p class="mb-1">{{ $configuracao->endereco }} - {{ $configuracao->cidade }} - {{ $configuracao->estado }}</p>
                            <p>Atendimento 24 horas</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="rs-icon-info-4 mb-5">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>

                        <div class="body">
                            <h3 class="title">E-mail</h3>
                            <p class="mb-1">{{ $configuracao->email }}</p>
                            <p>Fale com a nossa equipe</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="rs-icon-info-4 mb-5">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="body">
                            <h3 class="title">Telefone</h3>
                            <p class="mb-1">{{ $configuracao->telefone }} / <a href="https://wa.me/{{ $numeroWhatsapp }}">{{ $configuracao->whatsapp }}</a></p>
                            <p>Atendimento 24 horas</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 mb-5">

                    <!-- ANIMALIS: formulário de contato atualizado -->
                    <h2 class="section-heading text-center text-primary no-after mb-5">
                        Envie uma mensagem
                    </h2>

                    <p class="subheading text-center">
                        Estamos prontos para orientar você e cuidar do seu pet.
                    </p>

                </div>

                <div class="col-12 col-sm-12 col-md-12">

                    @if (session('sucesso'))
                        <div class="alert alert-success">
                            {{ session('sucesso') }}
                        </div>
                    @endif

                   <form action="{{ route('contato.enviar') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control"
                                        id="p_name"
                                        name="nome"
                                        placeholder="Nome"
                                        autocomplete="name"
                                        required>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control"
                                        id="p_email"
                                        name="email"
                                        placeholder="E-mail"
                                        autocomplete="email"
                                        required>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control"
                                        id="p_subject"
                                        name="assunto"
                                        placeholder="Assunto"
                                        required>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="tel"
                                        class="form-control"
                                        id="p_phone"
                                        name="telefone"
                                        placeholder="Telefone / WhatsApp"
                                        autocomplete="tel">

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>

                        <div class="d-none" aria-hidden="true">
                            <input type="text"
                                class="form-control"
                                name="website"
                                tabindex="-1"
                                autocomplete="off">
                        </div>

                        <div class="form-group">
                            <textarea id="p_message"
                                name="mensagem"
                                class="form-control"
                                rows="6"
                                placeholder="Mensagem"
                                required></textarea>

                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <div id="success"></div>

                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
