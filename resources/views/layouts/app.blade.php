<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        span, img {
            user-select: none;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
   
</head>
<body>
    <div id="app">
        <div data-role="navview">
            <div class="navview-pane">
                <button class="pull-button">
                    <span class="default-icon-menu"></span>
                </button>
                <div class="suggest-box">
                    <input type="text" data-role="input" data-clear-button="false" data-search-button="true">
                    <button class="holder">
                        <span class="mif-search"></span>
                    </button>
                </div>
                <ul class="navview-menu" style="height: 100vh !important;">
                    <li class="item-separator"></li>

                    <li>
                        <a href="{{ URL::to('/') }}">
                            <span class="icon"><span class="mif-home"></span></span>
                            <span class="caption">Ana Sayfa</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">Bölümümüz Hakkında</li>
                    <li class="item-separator"></li>

                    <li>
                        <a href="{{ URL::to('genel_bilgiler') }}">
                            <span class="icon"><span class="mif-info"></span></span>
                            <span class="caption">Genel Bilgiler</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('vizyon_misyon') }}">
                            <span class="icon"><span class="mif-indent-increase"></span></span>
                            <span class="caption">Vizyon - Misyon</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">Kalite - İç Kontrol</li>
                    <li class="item-separator"></li>

                    <li>
                        <a href="{{ URL::to('kalite_politikamiz') }}">
                            <span class="icon"><span class="mif-insert-drive-file"></span></span>
                            <span class="caption">Kalite Politikamız</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('kalite_elcileri') }}">
                            <span class="icon"><span class="mif-users"></span></span>
                            <span class="caption">Kalite Elçileri</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('anketler') }}">
                            <span class="icon"><span class="mif-evernote"></span></span>
                            <span class="caption">Anketler</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('faaliyet_raporu') }}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Faaliyet Raporu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('dokumanlar') }}">
                            <span class="icon"><span class="mif-folder-shared"></span></span>
                            <span class="caption">Dökümanlar</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">Akademik</li>
                    <li class="item-separator"></li>

                    <li>
                        <a href="{{ URL::to('yonetim') }}">
                            <span class="icon"><span class="mif-file-word"></span></span>
                            <span class="caption">Yönetim</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('akademik_kadro') }}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Akademik Kadro</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('komisyonlar') }}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Komisyonlar</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">Eğitim - Öğretim</li>
                    <li class="item-separator"></li>

                    <li>
                        <a href="{{URL::to('lisans_egitimi')}}">
                            <span class="icon"><span class="mif-file-word"></span></span>
                            <span class="caption">Lisans Eğitimi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Sınavlar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-file-word"></span></span>
                            <span class="caption">Sınavlar (İ.Ö.)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Ders Kataloğu</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Ders Programı</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Ders Programı (İ.Ö.)</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('stajlar')}}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Stajlar</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://cmf-bm.web.nku.edu.tr/MühendislikTamamlamaProgramı/0/s/3945/19592" _target="blank">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Mühendislik Tamamlama</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">Öğrenci</li>
                    <li class="item-separator"></li>

                    <li>
                        
                        <a href="http://oidb.nku.edu.tr/" target="_blank">
                            <span class="icon"><span class="mif-school"></span></span>
                            <span class="caption">Öğrenci İşleri Daire Başkanlığı</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ogr.nku.edu.tr/" target="_blank">
                            <span class="icon"><span class="mif-profile"></span></span>
                            <span class="caption">Öğrenci Bilgi Sistemi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('yeterlilikler')}}">
                            <span class="icon"><span class="mif-file-word"></span></span>
                            <span class="caption">Yeterlilikler</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('istatistikler')}}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">İstatistikler</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('ogrenci_sayilari')}}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Öğrenci Sayıları</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('sinav_kurallari')}}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Sınav Kuralları</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">Erasmus</li>
                    <li class="item-separator"></li>

                    <li>
                        <a href="{{URL::to('ikili_anlasmalar')}}">
                            <span class="icon"><span class="mif-file-word"></span></span>
                            <span class="caption">İkili Anlaşmalar</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">STE</li>
                    <li class="item-separator"></li>

                    <li>
                        <a href="http://cmf.nku.edu.tr/STE-FakülteSTEYönergesi/0/s/11811/16437" target="_blank">
                            <span class="icon"><span class="mif-file-word"></span></span>
                            <span class="caption">Fakülte STE Yönergesi</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://euniversite.nku.edu.tr/kullanicidosyalari/1261/files/STE_Bilgisayar_Uygulama_Esaslari.pdf" target="_blank">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">Bölümümüz STE Esasları</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('cmf_ste_ortak_formlari')}}">
                            <span class="icon"><span class="mif-file-word"></span></span>
                            <span class="caption">ÇMF STE Ortak Formları</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('ilgili_evraklar') }}">
                            <span class="icon"><span class="mif-file-excel"></span></span>
                            <span class="caption">İlgili Evraklar</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>
                    <li class="item-header">Laboratuvar</li>
                    <li class="item-separator"></li>

                    <li>
                        <a href="{{ URL::to('yazilim_laboratuvari') }}">
                            <span class="icon"><span class="mif-laptop"></span></span>
                            <span class="caption">Yazılım Laboratuvarı</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('donanim_laboratuvari') }}">
                            <span class="icon"><span class="mif-lab"></span></span>
                            <span class="caption">Donanım Laboratuvarı</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navview-content">
                <div class="d-flex flex-justify-around flex-align-center p-10">
                    <img src="{{url('/images/Tekirdağ_Namık_Kemal_Üniversitesi_Logosu.png')}}" alt="NKU logosu" height="128"/>
                    <h1>Çorlu Mühendislik Fakültesi - Bilgisayar Mühendisliği</h1>
                </div>
                <div data-role="carousel" data-effect="slide" data-controls="false" data-bullets-position="right" 
                    data-height="400px">
                    <div class="slide d-flex flex-justify-center flex-align-center" data-cover="{{url('/images/banner1.png')}}"></div>
                    <div class="slide d-flex flex-justify-center flex-align-center" data-cover="{{url('/images/banner2.png')}}"></div>
                    <div class="slide d-flex flex-justify-center flex-align-center" data-cover="{{url('/images/banner3.png')}}"></div>
                    <div class="slide d-flex flex-justify-center flex-align-center" data-cover="{{url('/images/banner4.png')}}"></div>
                    <div class="slide d-flex flex-justify-center flex-align-center" data-cover="{{url('/images/banner5.png')}}"></div>
                    <div class="slide d-flex flex-justify-center flex-align-center" data-cover="{{url('/images/banner6.png')}}"></div>
                </div>
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
