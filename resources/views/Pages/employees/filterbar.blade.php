<form action="#" method="GET">

    <div class='row mb-3 bg-white w-100 shadow p-3 rounded'>

        <div class='col-5'>
            <div class="input-group">
                <label for="employees" class="input-group-text bg-white">Funcionários</label>
                <select class="form-select form-select-sm" id="employees" name="employees">
                    <option value="">...</option>
                </select>
            </div>
        </div>

        <div class='col-5'>
            <div class="input-group">
                <label for="period" class="input-group-text bg-white">Período</label>
                <input type='date' class='form-control form-sm-control' name='date_begin' value='{{date('Y-m-d')}}'>
                <input type='date' class='form-control form-sm-control' name='date_final' value='{{date('Y-m-d')}}'>
            </div>
        </div>

        <div class='col-2'>
            <div class="input-group">
                <button class='btn bg-roxo text-white w-100' type='submit'>Filtrar <i class="fas fa-filter text-white"></i> </button>
            </div>
        </div>

    </div>

</form>


