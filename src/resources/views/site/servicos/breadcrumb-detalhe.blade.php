<!-- BREADCRUMB -->
<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Início</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('servicos') }}">Serviços</a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $servico->nome }}
                    </li>
                </ol>
            </nav>

        </div>
    </div>
</div>
