@extends('wmaweb.en.base_layout')

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
                                <li class="breadcrumb-item list-inline-item active">Utaratibu wa Uombaji wa Leseni</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4 class="article-h2">Ukaribisho</h4>
                        <div class="col-12 px-0 mb-2 mt-2">

                            <div class="news-title">
                                <h4 >Ujumbe wa Afisa Mtendaji Mkuu</h4>
                            </div>
                            <div class="">
                                <ul class="list-unstyled list-inline mb-1">


                            <div class="news-content mt-3">
                                <p class="card-text" class="text-justify;"
                                style="letter-spacing: 0.05em; line-height: 1.5; text-align: justify; text-align-last: left;">
                                Wakala wa Vipimo ni Wakala ya Serikali ambayo ipo chini ya Wizara ya Viwanda na Biashara.
                                Ilianzishwa tarehe 17.05.2002 kwa agizo la Serikali (Government Establishment Order) Na.194 kupitia
                                Sheria ya uanzishwaji wa Wakala za Serikali sura 245.Kabla ya kuanzishwa kwake majukumu yake yalikuwa
                                yakitekelezwa chini ya idara iliyokuwa ndani Wizara ya Viwanda na Biashara.

                                Lengo kuu la kuanzishwa Wakala wa Vipimo ni kuboresha huduma zilizokuwa zikitolewa na Idara hiyo ya Vipimo chini ya Wizara ya Viwanda na Biashara na kupunguza gharama za uendeshaji kutoka katika mfuko mkuu wa Serikali kuu.

                                Ili kufanikisha lengo hilo, Wakala wa Vipimo inatekeleza majukumu yake kwa mujibu wa Sheria ya Vipimo Sura Na. 340. Majukumu yanayotekelezwa kupitia sheria hii ni uhakiki na ukaguzi wa Vipimo, kutoa ushauri wa kitaalam kwa waundaji wa vipimo hapa nchini, kuidhinisha miundo ya vipimo mbalimbali kabla ya kuingizwa hapa nchini,
                                ukaguzi wa bidhaa zilizofungashwa ambazo zinazalishwa kwenye viwanda vyetu vilivyopo hapa nchini na zile zinazotoka nje ya nchi.
                                </br>
                                Wakala wa Vipimo katika utekelezaji wa majukumu yake unasaidia katika kujenga uchumi wa kisasa, shirikishi na shindani,
                                msingi mkuu wa kufanikisha haya ni kuwa na viwanda vinavyotumia ipasavyo vilivyohakikiwa na kukidhi matakwa ya kimataifa (Traceability to International Standards)
                                 ambavyo huongeza tija, ufanisi na usahihi wa vipimo vya bidhaa zinazozalishwa kwenye viwanda hivyo kuwa shindani katika soko la ndani na la nje matokeo yake ni
                                 kuongeza kasi ya ukuaji wa uchumi na pato la Taifa.
                                <br>
                                Wakala wa Vipimo katika utekelezaji wa majukumu yake imeendelea kutoa mchango katika kuchochea
                                 maendeleo ya sekta za kiuchumi na kijamii nchini, kuchochea uzalishaji wa bidhaa unaozingatia vipimo sahihi,
                                  kuendelea kuchangia katika mfuko mkuu wa Serikali na itaendelea kuingia katika maeneo mapya kadri ya uhitaji ili
                                  kuhakikisha wananchi wanapata huduma na bidhaa zenye vipimo sahihi.
                                <br>

                            </p>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-md-3 navigation-column">
                @include('wmaweb.en.announcments_and_events')
            </div>
        </div>
    </div>
@endsection
