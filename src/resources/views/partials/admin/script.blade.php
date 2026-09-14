<script
  src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
  crossorigin="anonymous"
></script>
<script src="{{ asset('admin/js/adminlte.js') }}"></script>
<script
  src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
  crossorigin="anonymous"
></script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const sidebarWrapper = document.querySelector('.sidebar-wrapper');
    const sortableArea = document.querySelector('.connectedSortable');

    if (
      sidebarWrapper &&
      window.innerWidth > 992 &&
      globalThis.OverlayScrollbarsGlobal?.OverlayScrollbars
    ) {
      OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: {
          theme: 'os-theme-light',
          autoHide: 'leave',
          clickScroll: true,
        },
      });
    }

    if (sortableArea && globalThis.Sortable) {
      new Sortable(sortableArea, {
        group: 'shared',
        handle: '.card-header',
      });

      sortableArea.querySelectorAll('.card-header').forEach((cardHeader) => {
        cardHeader.classList.add('is-sortable');
      });
    }

    document.querySelectorAll('.admin-data-card').forEach((card) => {
      const header = card.querySelector('.card-header');
      const table = card.querySelector('table');
      const footer = card.querySelector('.card-footer');

      if (!header || !table || header.querySelector('.admin-list-controls, input[type="search"], select')) {
        return;
      }

      const title = header.querySelector('.card-title');
      if (!title) {
        return;
      }

      const controls = document.createElement('div');
      controls.className = 'admin-list-controls d-flex flex-wrap justify-content-md-end gap-2 mt-2 mt-md-0';
      controls.innerHTML = `
        <div class="input-group input-group-sm w-auto">
          <span class="input-group-text"><i class="bi bi-search" aria-hidden="true"></i></span>
          <input type="search" class="form-control admin-search-input" placeholder="Pesquisar registros" aria-label="Pesquisar registros" />
        </div>
        <select class="form-select form-select-sm w-auto" aria-label="Filtrar por status">
          <option value="all">Todos</option>
          <option value="sim">Ativos</option>
          <option value="não">Inativos</option>
        </select>
        <button type="button" class="btn btn-sm btn-primary" disabled aria-label="Novo registro indisponível">
          <i class="bi bi-plus-lg me-1" aria-hidden="true"></i>Novo registro
        </button>
      `;

      const row = document.createElement('div');
      row.className = 'row g-2 align-items-center';
      const titleColumn = document.createElement('div');
      titleColumn.className = 'col-12 col-md-4';
      const controlsColumn = document.createElement('div');
      controlsColumn.className = 'col-12 col-md-8';
      titleColumn.append(title);
      controlsColumn.append(controls);
      row.append(titleColumn, controlsColumn);
      header.append(row);

      const search = controls.querySelector('input');
      const status = controls.querySelector('select');
      const rows = [...table.querySelectorAll('tbody tr')];
      const filterRows = () => {
        rows.forEach((row) => {
          const text = row.textContent.toLocaleLowerCase('pt-BR');
          const matchesText = text.includes(search.value.toLocaleLowerCase('pt-BR'));
          const matchesStatus = status.value === 'all' || text.includes(status.value);
          row.hidden = !(matchesText && matchesStatus);
        });
      };
      search.addEventListener('input', filterRows);
      status.addEventListener('change', filterRows);

      if (footer && !footer.querySelector('.pagination')) {
        const pagination = document.createElement('ul');
        pagination.className = 'pagination pagination-sm m-0 float-end';
        pagination.setAttribute('aria-label', 'Paginação');
        pagination.innerHTML = '<li class="page-item disabled"><span class="page-link">&laquo;</span></li><li class="page-item active" aria-current="page"><span class="page-link">1</span></li><li class="page-item disabled"><span class="page-link">2</span></li><li class="page-item disabled"><span class="page-link">3</span></li><li class="page-item disabled"><span class="page-link">4</span></li><li class="page-item disabled"><span class="page-link">5</span></li><li class="page-item disabled"><span class="page-link">&raquo;</span></li>';
        footer.append(pagination);
      }
    });
  });
</script>
