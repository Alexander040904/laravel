@extends('layouts.app')

@section('title', 'Nuevo blog')

@push('css')
    <style>
        body{
            background-color: rgb(212, 212, 211);
        }
    </style>
@endpush




@section('content')
    <a href="/crud">Volver</a>
    <h1>Nuevo blog</h1>
  

   <x-formBlog>
        <x-slot name="api">
            /crud/create
        </x-slot>
   
   </x-formBlog>

  
@endsection

@push('css')
    <style>
        body{
            color: rgb(0, 0, 0);
        }
    </style>
    
@endpush