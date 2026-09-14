<aside class="app-sidebar barista-sidebar" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{ route('dashboard') }}" class="brand-link" aria-label="Ir para o dashboard">
            <span class="animalis-admin-logo" aria-label="Animalis Clínica Veterinária">
              <i class="fa fa-paw" aria-hidden="true"></i>
              <span>
                <strong>Animalis</strong>
                <small>Clínica Veterinária</small>
              </span>
            </span>
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Search-->
        <div class="sidebar-search" role="search">
          <label for="sidebar-search-input" class="visually-hidden">Filtrar menu</label>
          <input
            type="search"
            id="sidebar-search-input"
            class="form-control form-control-sm"
            placeholder="Filtrar menu…"
            autocomplete="off"
            data-lte-toggle="sidebar-search"
            data-lte-target="#navigation"
          />
          <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty role="status" hidden>
            Nenhuma página encontrada.
          </p>
        </div>
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Navegação principal">
            <!--begin::Sidebar Menu-->
            
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" @if(request()->routeIs('dashboard')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-house-gear-fill"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
                
              </li>
              <li class="nav-header">Conteúdo do Site</li>
              <li class="nav-item">
                <a href="{{ route('admin.banner.index') }}" class="nav-link {{ request()->routeIs('admin.banner.index') ? 'active' : '' }}" @if(request()->routeIs('admin.banner.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-card-image"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.indicador.index') }}" class="nav-link {{ request()->routeIs('admin.indicador.index') ? 'active' : '' }}" @if(request()->routeIs('admin.indicador.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-graph-up"></i>
                  <p>Indicadores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.servicos.index') }}" class="nav-link {{ request()->routeIs('admin.servicos.index') ? 'active' : '' }}" @if(request()->routeIs('admin.servicos.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-graph-up"></i>
                  <p>Serviços</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.detalhes-servico.index') }}" class="nav-link {{ request()->routeIs('admin.detalhes-servico.index') ? 'active' : '' }}" @if(request()->routeIs('admin.detalhes-servico.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-card-text"></i>
                  <p>Detalhes dos Serviços</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.funcionarios.index') }}" class="nav-link {{ request()->routeIs('admin.funcionarios.index') ? 'active' : '' }}" @if(request()->routeIs('admin.funcionarios.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-people-fill"></i>
                  <p>Equipe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.depoimentos.index') }}" class="nav-link {{ request()->routeIs('admin.depoimentos.index') ? 'active' : '' }}" @if(request()->routeIs('admin.depoimentos.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-chat-quote-fill"></i>
                  <p>Depoimento </p>
                </a>
              </li>
                    <li class="nav-item">
                <a href="{{ route('admin.faqs.index') }}" class="nav-link {{ request()->routeIs('admin.faqs.index') ? 'active' : '' }}" @if(request()->routeIs('admin.faqs.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-question-circle-fill"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.galerias.index') }}" class="nav-link {{ request()->routeIs('admin.galerias.index') ? 'active' : '' }}" @if(request()->routeIs('admin.galerias.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-images"></i>
                  <p>Galeria</p>
                </a>
              </li>



              <li class="nav-header">Configurações</li>
              <li class="nav-item">
                <a href="{{ route('admin.configuracoes-site.index') }}" class="nav-link {{ request()->routeIs('admin.configuracoes-site.index') ? 'active' : '' }}" @if(request()->routeIs('admin.configuracoes-site.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-gear-fill"></i>
                  <p>
                    Configurações do Site
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.horarios-servico.index') }}" class="nav-link {{ request()->routeIs('admin.horarios-servico.index') ? 'active' : '' }}" @if(request()->routeIs('admin.horarios-servico.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-clock-fill"></i>
                  <p>Horários de atendimento</p>
                </a>
              </li>

              <li class="nav-header">Comunicação</li>
              <li class="nav-item">
                <a href="{{ route('admin.mensagens-contato.index') }}" class="nav-link {{ request()->routeIs('admin.mensagens-contato.index') ? 'active' : '' }}" @if(request()->routeIs('admin.mensagens-contato.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-envelope-fill"></i>
                  <p>
                    Mensagens de Contato
                  </p>
                </a>
              </li>


              <li class="nav-header">Gestão</li>
              
              <li class="nav-item">
                <a href="{{ route('admin.agendamentos.index') }}" class="nav-link {{ request()->routeIs('admin.agendamentos.index') ? 'active' : '' }}" @if(request()->routeIs('admin.agendamentos.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-calendar-check-fill"></i>
                  <p>Agendamento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.clientes.index') }}" class="nav-link {{ request()->routeIs('admin.clientes.index') ? 'active' : '' }}" @if(request()->routeIs('admin.clientes.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-person-vcard-fill"></i>
                  <p>
                    Clientes
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pets.index') }}" class="nav-link {{ request()->routeIs('admin.pets.index') ? 'active' : '' }}" @if(request()->routeIs('admin.pets.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-heart-fill"></i>
                  <p>Pets</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.funcionarios.index') }}" class="nav-link {{ request()->routeIs('admin.funcionarios.index') ? 'active' : '' }}" @if(request()->routeIs('admin.funcionarios.index')) aria-current="page" @endif>
                  <i class="nav-icon bi bi-person-badge-fill"></i>
                  <p>Funcionários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="">
                  <i class="nav-icon bi bi-newspaper"></i>
                  <p>Prontuário</p>
                </a>
              </li>
            </ul>

             <li class="nav-header">Relatórios</li>
              
              <li class="nav-item">
                <a href="">
                  <i class="nav-icon bi bi-image-fill"></i>
                  <p>Relatórios</p>
                </a>
              </li>

            <!--end::Sidebar Menu-->

            <!-- Docs CTA (bottom of sidebar) -->
            <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
              <a
                href="{{ route('home') }}"
                class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
              >
                <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                Ver site
              </a>
            </div>
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
