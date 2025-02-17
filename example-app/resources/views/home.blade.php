@extends('layouts.app')

@push('css')
    <style>
        body {
            background-color: rgb(151, 151, 155);
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color: red;
        }
    </style>
@endpush

@section('title')
    Laravel 12
@endsection

@section('content')
    <div class="max-w-x-7xl mx-auto px-4">
        <x-alert type="info" class="mb-4">
            <x-slot name="title">
                Titulo
            </x-slot>
            Contenido de la alerta
        </x-alert>
        <p>hola mundo</p>
    </div>
@endsection
