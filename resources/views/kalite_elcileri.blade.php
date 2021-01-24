@extends('layouts.app')

@section('content')
<div class="p-10">
    <h4 class="mb-10 text-center">Bilgisayar Mühendisliği Bölümü - Kalite Elçilerimiz</h4>

    <div class="d-flex flex-justify-around flex-align-center">
        <div class="skill-box">
            <div class="header bg-blue fg-white">
                <img src="{{url('/images/erkan_ozhan.jpg')}}" class="avatar">
                <div class="title">Erkan Özhan</div>
                <div class="subtitle">Dr. Öğr. Üyesi</div>
            </div>
        </div>
        <div class="skill-box">
            <div class="header bg-blue fg-white">
                <img src="{{url('/images/cihat_erdogan.jpg')}}" class="avatar">
                <div class="title">Cihat Erdoğan</div>
                <div class="subtitle">Arş. Gör. Dr.</div>
            </div>
        </div>
    </div>

   
</div>
@endsection
