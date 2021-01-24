@extends('layouts.app')

@section('content')
<div class="p-10">
    <h4 class="mb-10 text-center">Bilgisayar Mühendisliği Bölümü - Akademik Kadro</h4>

    <div class="grid">
        <div class="row">
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/ercanbulus.jpg')}}" class="avatar">
                            <div class="title">Doç. Dr. Ercan Buluş</div>
                            <div class="subtitle">Bölüm Başkanı</div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502328" target="_blank">
                                        (0282) 250 - 2328
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:ercanbulus@nku.edu.tr" target="_blank">
                                        ercanbulus@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://ercanbulus.cv.nku.edu.tr" target="_blank">
                                        ercanbulus.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/erdincuzun.jpg')}}" class="avatar">
                            <div class="title">Doç. Dr. Erdinç Uzun</div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502325" target="_blank">
                                        (0282) 250 - 2325
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:erdincuzun@nku.edu.tr" target="_blank">
                                        erdincuzun@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://erdincuzun.cv.nku.edu.tr" target="_blank">
                                        erdincuzun.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/pinartufekci.jpg')}}" class="avatar">
                            <div class="title">Doç. Dr. Pınar Tüfekçi</div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502343" target="_blank">
                                        (0282) 250 - 2343
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:pinartufekci@nku.edu.tr" target="_blank">
                                        pinartufekci@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://pinartufekci.cv.nku.edu.tr" target="_blank">
                                        pinartufekci.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/nusretbulus2.jpg')}}" class="avatar">
                            <div class="title">Dr. Öğr. Üyesi <br/> Halil Nüsret Buluş</div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502352" target="_blank">
                                        (0282) 250 - 2352
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:nbulus@nku.edu.tr" target="_blank">
                                        nbulus@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://nbulus.cv.nku.edu.tr" target="_blank">
                                        nbulus.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
        </div>
        <div class="row">
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/erkanozhan2.jpg')}}" class="avatar">
                            <div class="title">Dr. Öğr. Üyesi Erkan Özhan</div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502384" target="_blank">
                                        (0282) 250 - 2384
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:eozhan@nku.edu.tr" target="_blank">
                                        eozhan@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://eozhan.cv.nku.edu.tr" target="_blank">
                                        eozhan.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/ahmetsaygili.jpg')}}" class="avatar">
                            <div class="title">Dr. Öğr. Üyesi Ahmet Saygılı</div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502376" target="_blank">
                                        (0282) 250 - 2376
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:asaygili@nku.edu.tr" target="_blank">
                                        asaygili@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://asaygili.cv.nku.edu.tr" target="_blank">
                                        asaygili.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
        </div>
        <div class="row">
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/vildanatalayaydin.jpg')}}" class="avatar">
                            <div class="title">
                                Öğr. Gör. Dr. <br/> Vildan Atalay Aydın
                            </div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502379" target="_blank">
                                        (0282) 250 - 2379
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:vatalay@nku.edu.tr" target="_blank">
                                        vatalay@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://vatalay.cv.nku.edu.tr" target="_blank">
                                        vatalay.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/pinarcihan.jpg')}}" class="avatar">
                            <div class="title">
                                Arş. Gör. Dr. Pınar Cihan
                            </div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502456" target="_blank">
                                        (0282) 250 - 2456
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:pkaya@nku.edu.tr" target="_blank">
                                        pkaya@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://pkaya.cv.nku.edu.tr" target="_blank">
                                        pkaya.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
        </div>
        <div class="row">
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/rabiakorkmaztan.jpg')}}" class="avatar">
                            <div class="title">
                                Arş. Gör. Dr. Rabia Korkmaz Tan
                            </div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502455" target="_blank">
                                        (0282) 250 - 2455
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:rkorkmaz@nku.edu.tr" target="_blank">
                                        rkorkmaz@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://rkorkmaz.cv.nku.edu.tr" target="_blank">
                                        rkorkmaz.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/buraksevinc.jpg')}}" class="avatar">
                            <div class="title">
                                Araş. Gör. Burak Sevinç
                            </div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502387" target="_blank">
                                        (0282) 250 - 2387
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:bsevinc@nku.edu.tr" target="_blank">
                                        bsevinc@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://bsevinc.cv.nku.edu.tr" target="_blank">
                                        bsevinc.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
        </div>
        <div class="row">
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/güvencusanmaz.jpg')}}" class="avatar">
                            <div class="title">
                                Araş. Gör. Güvenç Usanmaz
                            </div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502387" target="_blank">
                                        (0282) 250 - 2385
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:gusanmaz@nku.edu.tr" target="_blank">
                                        gusanmaz@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://gusanmaz.cv.nku.edu.tr" target="_blank">
                                        gusanmaz.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/nihaterenozmen.jpg')}}" class="avatar">
                            <div class="title">
                                Araş. Gör. Nihat Eren Özmen
                            </div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502365" target="_blank">
                                        (0282) 250 - 2365
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:nozmen@nku.edu.tr" target="_blank">
                                        nozmen@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://nozmen.cv.nku.edu.tr" target="_blank">
                                        nozmen.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
        </div>
        <div class="row">
            <!--CELL-->
            <div class="cell-6">
                <div class="d-flex flex-justify-around flex-align-center">
                    <div class="skill-box block-shadow-impact w-100">
                        <div class="header bg-blue fg-white">
                            <img src="{{url('/images/ufukcetin.jpg')}}" class="avatar">
                            <div class="title">
                                Öğr. Gör. Dr. Ufuk Çetin
                            </div>
                        </div>
                        <ul class="skills">
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-phone-forwarded mif-2x"></i>
                                    <a href="tel:02822502436" target="_blank">
                                        (0282) 250 - 2436
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-mail mif-2x"></i>
                                    <a href="mailto:ucetin@nku.edu.tr" target="_blank">
                                        ucetin@nku.edu.tr
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="d-flex flex-justify-between flex-align-center">
                                    <i class="mif-external mif-2x"></i>
                                    <a href="http://ucetin.cv.nku.edu.tr" target="_blank">
                                        ucetin.cv.nku.edu.tr
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--END CELL-->
        </div>
    </div>
</div>
@endsection
