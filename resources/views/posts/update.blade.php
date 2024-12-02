@extends('layouts.app')

@section('title', 'Update blog')

@push('css')
    <style>
        body{
            background-color: rgb(212, 212, 211);
        }
    </style>
@endpush




@section('content')
    <a href="{{ route('crud.show', $post->id ) }}">Volver</a>
    <h1>Update blog {{$post->id}} </h1>
   
   <x-formBlog >
    <x-slot name="api">
        
        {{ route('crud.update',$post->id) }}
    </x-slot>
    <x-slot name='met'>
        @method('PUT')
    </x-slot>
    <x-slot name="title">
        {{ $post->title }} {{-- Este es el objeto completo que puedes pasar --}}
    </x-slot>
    <x-slot name="category">
        {{ $post->category }} {{-- Este es el objeto completo que puedes pasar --}}
    </x-slot>
    <x-slot name="content">
        {{ $post->content }} {{-- Este es el objeto completo que puedes pasar --}}
    </x-slot>
    <x-slot name='button'>
        Actualizar
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