@extends('layout.dashboard')

@section('show-page-header', 'false')

@section('content')
    @include('admin.mensagens-contato.listaMensagensContato')
@endsection
