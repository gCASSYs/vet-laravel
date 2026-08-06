@php
    $numeroWhatsapp = preg_replace('/\D/', '', $configuracao->whatsapp);

    if (strlen($numeroWhatsapp) == 11) {
        $numeroWhatsapp = '55' . $numeroWhatsapp;
    }
@endphp

<!-- FOOTER SECTION -->
<div class="footer">
    <div class="content-wrap">
        <div class="container">
            <div class="row footer-grid">

                <!-- Coluna 1: apresentação da clínica -->
                <div class="col-12 col-md-6 col-lg-4 footer-column">
                    <div class="footer-item">
                        <div class="brand-logo footer-brand">
                            <i class="fa fa-paw" aria-hidden="true"></i>
                            <span>
                                <strong>Animalis</strong>
                                <small>Clínica Veterinária</small>
                            </span>
                        </div>

                        <p>
                            {{ $configuracao->descricao_footer }}
                        </p>

                        <img src="{{ asset('vet/images/payment.png') }}" alt="Formas de pagamento aceitas" class="payment-img">

                        <div class="footer-social" aria-label="Redes sociais">
                            <a href="{{ $configuracao->facebook }}" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="{{ $configuracao->instagram }}" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" aria-label="Google Plus"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Coluna 2: horários -->
                <div class="col-12 col-md-6 col-lg-4 footer-column">
                    <div class="footer-item">
                        <div class="footer-title">Horário de atendimento</div>

                        <p>Atendimento organizado mediante contato com a equipe para oferecer mais atenção a cada paciente.</p>

                        <ul class="list">
                            <li><span>Emergência</span><span>24 horas</span></li>
                            <li><span>Internação</span><span>24 horas</span></li>
                            <li><span>Consultas</span><span>08h às 20h</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Coluna 3: contato -->
                <div class="col-12 col-md-12 col-lg-4 footer-column">
                    <div class="footer-item">
                        <div class="footer-title">Informações de contato</div>

                        <p>Fale com a nossa equipe para orientações e atendimento.</p>

                        <ul class="list-info">
                            <li>
                                <div class="info-icon">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="info-text">{{ $configuracao->endereco }}, {{ $configuracao->cidade }} - {{ $configuracao->estado }}</div>
                            </li>

                            <li>
                                <div class="info-icon">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="info-text">
                                    {{ $configuracao->telefone }} /
                                    <a href="https://wa.me/{{ $numeroWhatsapp }}">{{ $configuracao->whatsapp }}</a>
                                </div>
                            </li>

                            <li>
                                <div class="info-icon">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="info-text">{{ $configuracao->email }}</div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Barra final -->
    <div class="fcopy">
        <div class="container">
            <p class="ftex">&copy; 2026 {{ $configuracao->nome_clinica }}. Todos os direitos reservados.</p>
        </div>
    </div>
</div>
