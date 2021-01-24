@extends('layouts.app')

@section('content')
<div class="p-10">
    <h4 class="mb-6">Donanım Laboratuarımız</h4>
    <div class="grid">
        <div class="row m-3">
            <img src="{{url('/images/d1.jpg')}}"/>
        </div>
        <div class="row m-3">
            <img src="{{url('/images/d2.jpg')}}"/>
        </div>
        <div class="row m-3">
            <img src="{{url('/images/d3.jpg')}}"/>
        </div>
    </div>
</div>
@endsection
