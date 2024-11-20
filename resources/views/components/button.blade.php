@props(['type'=>'button'])
@php
$charType = $type; 

@endphp
<div>
    <h5>{{$newTitle}}</h5>
    <div id="liveAlertPlaceholder"></div>
    <button type={{$charType}} class="btn btn-primary" id="liveAlertBtn">{{$slot}}</button>
</div>
