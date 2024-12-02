@extends('layouts.app')

@section('title', $id->id)

@push('css')
    <style>
        body{
            background-color: rgb(212, 212, 211);
        }
    </style>
@endpush




@section('content')
    <a href="{{ route('crud.crud') }}">Volver</a>
    <h1>Titulo: {{$id->title}}</h1>
    <b>
        <b>Categoria</b>
        {{$id->category}}
    </b>

    <b>{{$id->content}} </b>

    <b>
       
        <a href=" {{ route('crud.edit', $id->id) }}">Update</a>
    </b>
    <b>
  
    </b>


    <form action="{{ route('crud.delete', $id->id) }}" method="POST">
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