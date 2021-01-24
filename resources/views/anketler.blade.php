@extends('layouts.app')

@section('content')
<div class="p-10 text-center" style="height: 600px">
    <div data-role="accordion">
        <div class="frame">
            <div class="heading">Anket Listesi</div>
            <div class="content">
                <div class="d-flex flex-column flex-justify-around flex-align-center">
                    <a class="list-group-item" href="http://anket.nku.edu.tr/?ai=91*ee409a09d51060c73aa9dc9d672a47f7" target="_blank">Dış Paydaş Memnuniyet Anketi</a>
                    <a class="list-group-item" href="http://ogr.nku.edu.tr/" target="_blank">Genel Öğrenci Memnuniyet Anketi (E-Üniversiteye giriş yaparak doldurulması gerekmektedir.)</a>
                    <a class="list-group-item" href="http://anket.nku.edu.tr/?ai=86*218be1e5b6cc736837dc7d651905f8ec" target="_blank">Liderlik anketi</a>
                    <a class="list-group-item" href="http://anket.nku.edu.tr/?ai=85*13f06cfc836268bf82a5225bfbb93a9e" target="_blank">Mezun Memnuniyet Anketi</a>
                    <a class="list-group-item" href="http://anket.nku.edu.tr/?ai=87*997aea7d4ab62b9db91bc3e59963d073" target="_blank">Namık Kemal Üniversitesi Akademik Personel Memnuniyet Anketi</a>
                    <a class="list-group-item" href="http://anket.nku.edu.tr/?ai=88*6ecfc49ab5c3288b85d8f53e4a23f652" target="_blank">Namık Kemal Üniversitesi İdari Personel Memnuniyet Anketi</a>
                    <a class="list-group-item" href="http://anket.nku.edu.tr/?ai=90*d482cccd34415430ec54e2d2e4f1562a" target="_blank">Yemekhane Memnuniyeti Anketi</a>
                </div>
            </div>
        </div>
        <div class="frame">
            <div class="heading">İstatistikler</div>
            <div class="content">
                <div class="d-flex flex-column flex-justify-around flex-align-center">
                    <a class="list-group-item" href="http://aves.nku.edu.tr/istatistikyeni.php?no=01020000" target="_blank">Genel İstatistikler</a>
                    <a class="list-group-item" href="https://esas.nku.edu.tr/login/istatislikler" target="_blank">Memnuniyet Anket Sonuçları</a>
                    <a class="list-group-item" href="https://esas.nku.edu.tr/login/performansraporu" target="_blank">Performans Raporu</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection