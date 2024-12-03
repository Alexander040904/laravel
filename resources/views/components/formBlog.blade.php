<form action="{{ $api }}" method="POST">
    {{-- /crud/create --}}
    @csrf
    {!! $met ?? '' !!}
    <label for="title">Titulo;
        <input type="text" name="title" value="{{ $title ?? '' }}">
    </label>
    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <label for="content">Contenido;
    </label>
    <br>

    <textarea name="content" id="" cols="30" rows="5">{{ $content ?? '' }}</textarea>
    @error('content')
        <p>{{ $message }}</p>
    @enderror

    <br>
    <label for="category">Categoria;
        <input type="text" name="category" value="{{ $category ?? '' }}">
    </label>
    @error('category')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <label for="slug">Slug;
        <input type="text" name="slug" value="{{ $slug ?? '' }}">
    </label>
    @error('slug')
        <p>{{ $message }}</p>
    @enderror
    <br>

    <button type="submit">{{ $button ?? 'Crear' }}</button>


</form>
