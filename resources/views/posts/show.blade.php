@extends('layouts.app')

@section('title', $post)
@push('css')
    <style>
        body{
            background-color: rgb(212, 212, 211);
        }
    </style>
@endpush




@section('content')
    <section class="components">
        <div hidden>
            <h1>Show <?= $post ?></h1>
            <p>{{ $post }}</p>
        </div>

        <div>
            <x-alert type="danger" class="mb-4">
                <x-slot name="Info">
                    Info alert
                </x-slot>
                Danger
            </x-alert>
            <p>Patas</p>

        </div>
        <div>
            <x-alert2 type="warning" class="mb-4">
                <x-slot name="Info">
                    Info alert2
                </x-slot>
                Danger2
            </x-alert2>
            <p>Patas</p>

        </div>
        <div>
            <x-button>
                <x-slot name='newTitle'>
                    Alertas generada por js
                </x-slot>
                Mostrar alerta

            </x-button>
        </div>
    </section>
@endsection

@push('css')
    <style>
        body{
            color: rgb(0, 0, 0);
        }
    </style>
    
@endpush