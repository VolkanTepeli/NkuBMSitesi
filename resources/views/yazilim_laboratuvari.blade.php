@extends('layouts.app')

@section('content')
<div class="p-10">
    <h4 class="mb-6">Yazılım Laboratuarımız</h4>
    <div class="grid">
        <div class="row m-3">
            <img src="{{url('/images/y1.jpg')}}"/>
        </div>
        <div class="row m-3">
            <img src="{{url('/images/y2.jpg')}}"/>
        </div>
        <div class="row m-3">
            <img src="{{url('/images/y3.jpg')}}"/>
        </div>
    </div>
</div>
@endsection
