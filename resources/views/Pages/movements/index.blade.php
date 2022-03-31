@extends('app')


@section('content_root')

@include('Components.navbar')

<div class="container">

<div class="page-title">Movimentações <i class="fas fa-dollar-sign"></i></div>

    @include('Pages.movements.filterbar')

    @include('Pages.movements.table')

    @include('Pages.movements.pagination')

</div>



@endsection
