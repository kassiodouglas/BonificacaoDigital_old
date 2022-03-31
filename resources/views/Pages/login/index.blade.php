@extends('app')


@section('content_root')



<div class="container" style="height:100vh">

    <div class="row justify-content-center align-items-center h-100">
        <div class='col-8 shadow rounded h-75 panel-login'>

            <div class="row h-100 p-0 m-0 align-items-center" >
                <div class='col-6 p-5'>

                    <div class='logo'>
                        <img src="{{asset('storage/img/logo.png')}}">
                    </div>

                    <div class="text">
                        <img src="{{asset('storage/img/BonificaçãoDigital.png')}}">
                        <p>Bata suas metas e ganhe moedas digitais. Troque-as por produtos e serviços com nossos parceiros.</p>
                    </div>


                    <div class="small text-center mt-5" style="opacity: .4">Ano 2022 - v1.0</div>

                </div>
                <div class='col-6 p-5'>

                    <form action="{{route('movements')}}" method="GET">


                        <div class="row px-5">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="login" class="form-label text-light">Login</label>
                                    <input type="email" class="form-control" id="login" name="login">
                                </div>
                            </div>
                        </div>

                        <div class="row px-5">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="password" class="form-label text-light">Senha</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="row px-5">
                            <div class="col">
                                <div class="mb-3">
                                    <button type="submit" class="btn bg-roxo text-white w-100"> Acessar </button>
                                </div>
                            </div>
                        </div>


                    </form>


                </div>
            </div>

        </div>
    </div>

</div>



@endsection
