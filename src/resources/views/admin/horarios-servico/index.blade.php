@extends('layout.dashboard')

@section('show-page-header', 'false')

@section('content')
    @include('admin.horarios-servico.listaHorariosServico')
@endsection
