@extends('wmaweb.sw.base_layout')
<!-- /HEADER -->

<!-- contents -->
@section('content')
    <div class="container">
        <div class="col-12 special-page">
            <div class="col-12 py-4 px-0">
                <div class="row">
                    <div class="col-12 px-xs-0 px-1">
                        <nav aria-label="breadcrumb" class="mb-0">
                            <ol class="breadcrumb px-0">
                                <li class="breadcrumb-item "><a
                                        href="{{ route('home', ['language' => $current_language]) }}"><span
                                            class="fas fa-home"></span></a></li>
                                {{-- <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO COMSATS</li> --}}
                                <li class="breadcrumb-item list-inline-item active">Historia</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Historia ya Wakala wa Vipimo</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="about_hub">

                                Usimamizi wa matumizi ya vipimo (measurements) ulikuwepo hapa nchini Tanzania kwa zaidi ya
                                miaka hamsini (50), kama Idara ya Serikali ikiwa na lengo la kukidhi matakwa ya Serikali na
                                jamii kwa upande wa usimamizi wa kumlinda mlaji dhidi ya matumizi yasiyo sahihi ya Vipimo
                                (consumer protection through ensuring that measuring systems result in fair
                                tradetransactions).<br><br>
                                Historia ya Vipimo ilianza kabla ya Uhuru, wakati wa utawala waWajerumani na Waingereza,
                                Matumizi ya metriki (Metric System) yalianzishwa na Wajerumani wakati wa utawala wao kabla
                                ya vita kuu ya dunia, mwaka 1914 - 1918. Waingereza nao walipokuja kututawala, baada ya vita
                                hivyo, walianzisha mfumo wao wa matumizi ya vipimo vya impreriao ( Imperial System of
                                Measurements) uliotumika samba,ba na vipimo vya metriki.
                                <br>
                                <br>
                                Kazi ilifanywa kwa mujibu wa Sheria ya wakati huo iliyokuwa ikijulikana kama Weights and
                                Measures Ordinance, Chapter 221 ya mwaka 1931 pamoja na kanuni zake. Utendaji kazi ulikuwa
                                ukifanywa na wakaguzi wa vipimo (Inspectors of Weights and Measures ) waliokuwa chini ya
                                usimamizi Superintendant wa polisi.
                                <br>
                                <br>
                                Mwaka 1960 Sheria hiyo ya vipimo ilifutwa na kuanza kutumiwa Sheria mpya, Weights and
                                Measures Ordinance, Chapter 426 ya mwaka 1960. Sheria hii iliweka idara ya vipimo chini ya
                                Wizara iliyokuwa inahusika na masuala ya biashara ambayo ilikuwa Wizara ya Biashara na
                                Viwanda. Mwaka 1964, Idara ya Vipimo ilikuwa chini ya Wizara ya Biashara na Ushirika hadi
                                mwaka 1967 iliporudi tena kuwa chini ya Wizara ya Viwanda na Biashara chini ya uongozi wa
                                Kamishna wa Vipimo.
                                <br>
                                <br>
                                Mwaka 1968, Tanzania pamoja na nchi zingine za Afrika Mashariki (Kenya na Uganda) zilianza
                                kutumia mfumo mmoja wa vipimo wa metriki (Metric System). Mwaka 1969, Tanzania ilifungua
                                ofisi za vipimo katika zoni 3 (Mwanza, Tanga na Mbeya) ambako huduma za vipimo zilianza
                                kutolewa. Ilipofika mwaka 1977/78 ofisi za vipimo ziliweza kufunguliwa katika kila mkoa
                                Tanzania Bara.
                                <br>
                                <br>
                                Sheria ya Weights and Measures Ordinance, Chapter 426 ya mwaka 1960, nayo ilifutwa mwaka
                                1982 na Sheria mpya, Weights and Measures Act No. 20 ya mwaka 1982, kuanza kutumika. Mfumo
                                wa matumizi ya International System of Measurements nao ulianza kutumika. Jina la ofisi nalo
                                lilibadilishwa na kujulikana kama Weights and Measures Bureau (WMB).
                                <br>
                                <br>Kuanzia mwaka 1984, Weights and Measures Bureau ilikuwa kitengo chini ya Kurugenzi ya
                                Biashara chini ya Wizara ya Viwanda na Biashara hadi ilipobadilishwa na kuwa Wakala wa
                                Vipimo kuanzia mwaka 2002. Kwa kipindi chote hiki (WMB) imekuwa ikitekeleza majukumu yake
                                kwa mijibu wa Sheria ya Vipimo Na. 20, iliyopitishwa na Bunge mwaka 1982 na kuanza kutumika
                                rasmi tarehe 15 Mei, 1983 kwa Tangazo la Serikali Na. 59 la mwaka 1983.
                                <br>
                                <br>
                                Kufuatia mpango kabambe wa Serikali wa kuboresha huduma zinazotolewa na taasisi za Umma na
                                kupunguza baadhi ya majukumu kwa Serikali Kuu, WMB ilikuwa ni ni moja ya taasisi za Serikali
                                zilizoingizwa katika mpango huo. kwa mujibu wa Sheria ya Wakala wa Serikali Na. 30 ya mwaka
                                1997 WMB ilibadilishwa na kuwa Wakala wa Vipimo (WMA) kuanzia tarehe 13 Mei, 2002 kwa
                                Tangazo la Serikali (Order no.) namba 194 la tarehe 17 Mei, 2002. Kuanzia hapo WMA imekuwa
                                ikiongozwa na Kamishna wa Vipimo ambaye pia ndiye Afisa Mtendaji Mkuu. Vipimo inatekeleza
                                majukumu yake kwa mujibu wa Sheria ya Vipimo na. 340 kama ilivyorekebishwa mwaka 2002 na
                                Sheria ya Wakala za Serikali Sura na 245 kama ilivyorekebishwa mwaka 2009.
                                <br>
                                <br>
                            </p>

                        </div>
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.sw.announcments_and_events')
                    </div>

                </div>

            </div>
        </div>
    </div>

    </div>
    <!-- /contents -->
@endsection
