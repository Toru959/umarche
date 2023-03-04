@props(['status' => 'info'])

@php
if(status === 'info'){$bgColor = 'bg-bule-300';}
if(status === 'error'){$bgColor = 'bg-red-500';}
@endphp

@if(session('message'))
    <div class="{{$bgColor}} w-1/2 max-auto p-2 text-white">
        {{session('message')}}
    </div>
@endif