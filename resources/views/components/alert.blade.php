@props(['type' => 'success'])
@php
switch ($type) {
    case 'success':
        $class = 'alert-success';
        break;
    case 'danger':
        $class = 'alert-danger';
        break;
    case 'warning':
        $class = 'alert-warning';
        break;
    default:
        $class = 'alert-info';
        break;
}
     
@endphp


<div  {{$attributes->merge(['class'=> 'alert '. $class])}}role="alert">
    <span>{{ $Info ?? 'Info'}} </span>{{$slot}}

</div>