@extends('layouts.app')

@section('content')
<div class="p-10">
    <h4 class="mb-6 text-center">Duyurular</h4>
    <div class="grid">
        <div class="row m-3">
            <div class="card">
                <div class="card-header bg-blue fg-white text-center">
                    <h4>Güz Stajı İle İlgili Bilinmesi Gerekenler</h4>
                    <span class="text-light">2020-11-06</span>
                </div>
                <div class="card-content p-2">
                    <ol>
                        <li>
                            Konu seçimi NKUZEM’de bulunan google form üzerinden yapılacaktır.
                        </li>
                        <li>
                            Konu seçimi için son tarih 13.11.2020 saat 17.30’dur.
                        </li>
                        <li>
                            Staj teslimi, stajın alındığı tarihten itibaren güz dönemi sonuna kadar yapılabilir.
                        </li>
                        <li>
                            Staj teslimi yaparken sisteme 1 adet ZİP dosyası yüklenmelidir. Dosya adı öğrencinumarası.zip şeklinde olmalıdır (Örneğin: 1018606015.zip). Zip içinde olması gereken dosyalar: ...
                        </li>
                    </ol>
                    <a class="button primary" role="button" href="{{URL::to('/duyuru/1')}}">Detaylar için tıklayınız</a>
            </div>
        </div>
        <div class="row m-3">
            
        </div>
        <div class="row m-3">
            
        </div>
    </div>
</div>
@endsection
