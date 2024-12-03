@extends('layouts.app')

@section('title', $post->id)

@push('css')
    <style>
        body{
            background-color: rgb(212, 212, 211);
        }
    </style>
@endpush




@section('content')
    <a href="{{ route('crud.index') }}">Volver</a>
    <h1>Titulo: {{$post->title}}</h1>
    <b>
        <b>Categoria</b>
        {{$post->category}}
    </b>

    <b>{{$post->content}} </b>

    <b>
       
        <a href=" {{ route('crud.edit', $post) }}">Update</a>
    </b>
    <b>
  
    </b>


    <form action="{{ route('crud.destroy', $post) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
    </form>


  
@endsection

@push('css')
    <style>
        body{
            color: rgb(0, 0, 0);
        }
    </style>
    
@endpush