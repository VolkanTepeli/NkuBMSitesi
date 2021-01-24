@extends('layouts.app')

@section('content')
<div class="p-10">
    <h4 class="mb-6 text-center">Öğrenci Sayıları</h4>
    <table class="table striped table-border mt-4">
        <thead>
            <th class="text-center">Eğitim Öğretim Dönemi</th>
            <th class="text-center">Öğrenci Sayısı (1. Öğretim)</th>
            <th class="text-center">Öğrenci Sayısı (2. Öğretim)</th>
            <th class="text-center">Toplam</th>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2008-2009</p>
                </td>
                <td class="text-center">
                    <p>29</p>
                </td>
                <td class="text-center">
                    <p>-</p>
                </td>
                <td class="text-center">
                    <p>29</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2009-2010</p>
                </td>
                <td class="text-center">
                    <p>52</p>
                </td>
                <td class="text-center">
                    <p>-</p>
                </td>
                <td class="text-center">
                    <p>52</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2010-2011</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>114</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2011-2012</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>114</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2012-2013</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>124</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2013-2014</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>124</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2014-2015</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>124</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2015-2016</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>124</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2016-2017</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>124</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2017-2018</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>124</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2018-2019</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>124</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">Toplam</p>
                </td>
                <td class="text-center">
                    <p>629</p>
                </td>
                <td class="text-center">
                    <p>548</p>
                </td>
                <td class="text-center">
                    <p>1177</p>
                </td>
            </tr>
        </tbody>
    </table>
    <h4 class="mt-6 mb-6 text-center">ÖSS En Yüksek - En Düşük Puan Durumları ve Kontenjanlar</h4>
    <hr/>
    <h4 class="mb-6 text-center">Örgün Öğretim</h4>
    <!-- Tablo -->
    <table class="table striped table-border mt-4">
        <thead>
            <th class="text-center">Eğitim Öğretim Dönemi</th>
            <th class="text-center">Öğrenci Sayısı (1. Öğretim)</th>
            <th class="text-center">Öğrenci Sayısı (2. Öğretim)</th>
            <th class="text-center">Toplam</th>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2008-2009</p>
                </td>
                <td class="text-center">
                    <p>31</p>
                </td>
                <td class="text-center">
                    <p>284.292</p>
                </td>
                <td class="text-center">
                    <p>330.109</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2009-2010</p>
                </td>
                <td class="text-center">
                    <p>52</p>
                </td>
                <td class="text-center">
                    <p>289.377</p>
                </td>
                <td class="text-center">
                    <p>325.140</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2010-2011</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>409.338</p>
                </td>
                <td class="text-center">
                    <p>457.245</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2011-2012</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>381.749</p>
                </td>
                <td class="text-center">
                    <p>423.768</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2012-2013</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>327.234</p>
                </td>
                <td class="text-center">
                    <p>503.457</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2013-2014</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>293.848</p>
                </td>
                <td class="text-center">
                    <p>332.725
                    </p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2014-2015</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>292.047</p>
                </td>
                <td class="text-center">
                    <p>341.061</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2015-2016</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>287.398</p>
                </td>
                <td class="text-center">
                    <p>320.634</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2016-2017</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>292.879</p>
                </td>
                <td class="text-center">
                    <p>352.807</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2017-2018</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>296.318</p>
                </td>
                <td class="text-center">
                    <p>339.768</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2018-2019</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>302.621</p>
                </td>
                <td class="text-center">
                    <p>434.125</p>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- END Tablo -->
    <h4 class="mt-6 mb-6 text-center">İkinci Öğretim</h4>
    <!-- Tablo -->
    <table class="table striped table-border mt-4">
        <thead>
            <th class="text-center">Eğitim Öğretim Dönemi</th>
            <th class="text-center">Öğrenci Sayısı (1. Öğretim)</th>
            <th class="text-center">Öğrenci Sayısı (2. Öğretim)</th>
            <th class="text-center">Toplam</th>
        </thead>
        <tbody>
                <td class="text-center">
                    <p class="text-bold">2010-2011</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>381.140</p>
                </td>
                <td class="text-center">
                    <p>410.483</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2011-2012</p>
                </td>
                <td class="text-center">
                    <p>57</p>
                </td>
                <td class="text-center">
                    <p>355.042</p>
                </td>
                <td class="text-center">
                    <p>380.439</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2012-2013</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>308.546</p>
                </td>
                <td class="text-center">
                    <p>343.389</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2013-2014</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>265.473</p>
                </td>
                <td class="text-center">
                    <p>291.817
                    </p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2014-2015</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>267.778</p>
                </td>
                <td class="text-center">
                    <p>329.139</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2015-2016</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>268.081</p>
                </td>
                <td class="text-center">
                    <p>337.111</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2016-2017</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>292.879</p>
                </td>
                <td class="text-center">
                    <p>352.807</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2017-2018</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>276.924</p>
                </td>
                <td class="text-center">
                    <p>368.126</p>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <p class="text-bold">2018-2019</p>
                </td>
                <td class="text-center">
                    <p>62</p>
                </td>
                <td class="text-center">
                    <p>277.794</p>
                </td>
                <td class="text-center">
                    <p>340.350</p>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- END Tablo -->
    <p class="mt-6">
        2008-2009 Eğitim -Öğretim yılından bu yana öğrenci alan bölümümüz Örgün Öğretimde 316, İkinci Öğretimde 234 mezun vermiştir. Bölümümüzde şu an itibariyle aktif olarak eğitimine devam eden 427 örgün, 423 ikinci öğretim olmak üzere toplam 850 öğrencimiz bulunmaktadır. 850 öğrencimizin 627'si üniversite sınavı ile yerleşen öğrenciler iken 223 öğrencimiz yatay geçiş, dikey geçiş ve mühendislik tamamlama öğrencisidir. 
    </p>
</div>
@endsection