@extends('layouts.app')

@section('title', 'tonotos')


@section('content')
    <div class="container mx-auto px-4">
        <h1 class="color-blue">Página principal</h1>

        
        <x-alert type="danger">
            <x-slot name="title">
                ¡ALERTA!
            </x-slot>
            Me la pelan 
        </x-alert>
    </div>
@endsection
    

