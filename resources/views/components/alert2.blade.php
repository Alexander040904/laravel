<div  {{$attributes->merge(['class'=> 'alert '. $class])}}role="alert">
    <span>{{ $Info ?? 'Info'}} </span>{{$slot}}

</div>