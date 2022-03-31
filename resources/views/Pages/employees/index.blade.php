@extends('app')


@section('content_root')

@include('Components.navbar')

<div class="container">

<div class="page-title">Funcionários <i class="fas fa-users"></i></div>

@include('Pages.employees.filterbar')

@include('Pages.employees.table')

@include('Pages.employees.pagination')


</div>



@endsection
