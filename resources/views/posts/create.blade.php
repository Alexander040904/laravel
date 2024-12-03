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

    <a href="{{ route('crud.index') }}">Volver</a>
    <h1>Nuevo blog</h1>
{{--     @if ($errors->any())
     <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                
            @endforeach
        </ul>
     </div>
        
    @endif --}}
  

   <x-formBlog>
        <x-slot name="api">
           
            {{ route('crud.store')}}
        </x-slot>
        <x-slot name="title">
            {{ old('title') }} {{-- Este es el objeto completo que puedes pasar --}}
        </x-slot>
        <x-slot name="category">
            {{ old('category') }} {{-- Este es el objeto completo que puedes pasar --}}
        </x-slot>
        <x-slot name="slug">
            {{ old('slug') }} {{-- Este es el objeto completo que puedes pasar --}}
        </x-slot>
        <x-slot name="content">
            {{ old('content') }} {{-- Este es el objeto completo que puedes pasar --}}
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