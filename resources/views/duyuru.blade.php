@extends('layouts.app')

@section('content')
<div class="p-10">
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
                            Staj teslimi yaparken sisteme 1 adet ZİP dosyası yüklenmelidir. Dosya adı öğrencinumarası.zip şeklinde olmalıdır (Örneğin: 1018606015.zip). Zip içinde olması gereken dosyalar:
                        </li>
                    </ol>
                    <ul>
                        <li>
                            NKU tez yazım şablonuna göre hazırlanmış staj raporu (hem pdf hem de word formatında olmalı).
                        </li>
                        <li>
                            Yazmış olduğunuz kaynak kodlar.
                        </li>
                        <li>
                            Docker imajınızın URL'si (bazı ödevler için gerekli).
                        </li>
                    </ul>
                    <p>
                        Stajı kabul edilince mezun olacak öğrenciler, stajını sisteme yükledikten sonra mezun durumda olduğunuzu belirten bir mail atarsa staj değerlendirilmesi daha hızlı yapılacaktır.
                    </p>

                    <p>
                        <span class="text-bold">NOT 1: </span>Stajı kabul edilince mezun olacak öğrenciler, stajını sisteme yükledikten sonra mezun durumda olduğunuzu belirten bir mail atarsa staj değerlendirilmesi daha hızlı yapılacaktır.
                    </p>
                    <p>
                        <span class="text-bold">NOT 2: </span>Duyuruların takibi için uzaktan eğitim sistemini ve bölüm sayfasını takip etmelisiniz.
                    </p>
                    <p>
                        <span class="text-bold">NOT 3: </span>Staj kuralları ile ilgili sorularınız için komisyon üyelerine mail atarak iletebilirsiniz. Mail atarken tüm staj üyelerini eklemelisiniz.
                    </p>
                </div>
                <div class="card-footer bg-blue">
                </div>
            </div>
        </div>
        <div class="row m-3">
            
        </div>
        <div class="row m-3">
            
        </div>
    </div>
</div>
@endsection
