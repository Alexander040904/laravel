<x-mail::message>
# Por aprobar el mensaje

<x-mail::panel>
Se creado nuevo post
</x-mail::panel>
<x-mail::button url=" {{ route('crud.show', $post) }}">
{{config('app.name')}}
</x-mail::button>
</x-mail::message>