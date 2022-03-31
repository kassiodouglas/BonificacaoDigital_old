<div class="modal fade" id="modal_new_employee" tabindex="-1" aria-labelledby="modal_new_employee" aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Novo funcionário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            @include('Components.forms.employe')

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar <i class="fas fa-ban"></i> </button>
          <button type="button" class="btn bg-roxo text-white">Salvar <i class="fas fa-save"></i></button>
        </div>
      </div>
    </div>

</div>
