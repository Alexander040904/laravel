
@props(['type' => 'POST'])
<form action="{{$api}}" method="POST" >
    {{-- /crud/create --}}
    @csrf
    {!! $met ?? '' !!}
    <label for="title">Titulo; 
        <input type="text" name="title" value="{{ $title ?? '' }}">
    </label>
    <br>
    <label for="content">Contenido; 
    </label> 
    <br>

    <textarea name="content" id="" cols="30" rows="5">{{$content ?? '' }}</textarea>
    
    <br>
    <label for="category">Categoria; 
        <input type="text" name="category" value="{{ $category ?? '' }}">
    </label>
    <br>
    
    <button type="submit">{{ $button ?? 'Crear' }}</button>
   

   </form>