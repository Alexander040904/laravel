@extends('layouts.app')

@section('title', 'Crud')
@push('css')
    <style>
        body{
            background-color: rgb(212, 212, 211);
        }
    </style>
@endpush




@section('content')
    <h5>Create</h5>
   
    <a href="{{route('crud.create')}}">Nuevo blog</a>

   <h5>Ver</h5>
   <ul>
    @foreach ($posts as $post)
       <li>
       
            <a href=" {{ route('crud.read', $post->id ) }}">
                {{$post->title}}
            </a>
       </li>
    @endforeach
   </ul>
  
@endsection

@push('css')
    <style>
        body{
            color: rgb(0, 0, 0);
        }
    </style>
    
@endpush