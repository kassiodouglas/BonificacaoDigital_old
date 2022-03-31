<form action="#" method="GET">

    <div class='row mb-3 bg-white w-100 shadow p-3 rounded'>

        <div class='col-3'>
            <div class="input-group">
                <label for="employees" class="input-group-text bg-white">Funcionários</label>
                <select class="form-select form-select-sm" id="employees" name="employees">
                    <option value="">...</option>
                </select>
            </div>
        </div>

        <div class='col-3'>
            <div class="input-group">
                <label for="type_movement" class="input-group-text bg-white">Tipo de movimentação</label>
                <select class="form-select form-select-sm" id="type_movement" name="type_movement">
                    <option value="0">Todas</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saida</option>
                </select>
            </div>
        </div>

        <div class='col-4'>
            <div class="input-group">
                <label for="period" class="input-group-text bg-white">Período</label>
                <input type='date' class='form-control form-sm-control' name='date_begin' value='{{date('Y-m-d')}}'>
                <input type='date' class='form-control form-sm-control' name='date_final' value='{{date('Y-m-d')}}'>
            </div>
        </div>

        <div class='col-2'>
            <div class="input-group">
                <button class='btn bg-roxo text-white w-100' type='submit'>Filtrar <i class="fas fa-filter text-white"></i></button>
            </div>
        </div>

    </div>

</form>


