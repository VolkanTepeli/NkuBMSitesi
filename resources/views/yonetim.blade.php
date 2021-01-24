@extends('layouts.app')

@section('content')
<div class="p-10">
    <h4 class="mb-10 text-center">Bilgisayar Mühendisliği Bölümü - Yönetim</h4>

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
    </div>
</div>
@endsection
