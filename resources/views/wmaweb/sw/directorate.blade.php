@extends('wmaweb.sw.base_layout')

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
                                <li class="breadcrumb-item list-inline-item active">Kurugenzi</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Kurugenzi</h4>

                        <div class="col-12 px-0 mt-4 mb-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                            <h5>Wakala wa Vipimo ina kurugenzi mbili;</h5><br>


                            <h5>1. Kurugenzi ya Huduma za Biashara</h5><br>
                            - Kusimamia kwa usahihi rasilimali za taasisi na kuhusisha matumizi ya Tehama kwa lengo la kutoa
                            huduma bora na kuleta ustawi wa taasisi. Hivyo, Kurugenzi hii;<br>

                            (i) Utoa ushauri juu ya ufanisi wa Taasisi na namna bora ya kuboresha utoaji wa huduma<br>

                            (ii) Uwezesha Wakala kutekeleza Sera na majukumu ya Kisheria<br>

                            (iii) Uandaa na kutoa ushauri wa Kitaalam juu ya mifumo ya usimamizi wa fedha na rasilimali za
                            Wakala<br>

                            (iv) Ensure Cross-cutting issues are addressed in the Strategic Plans<br>
                            (v) Kusimamia masuala mtambuka yanafanyiwa kazi katika Mpango Mkakati wa Wakala pamoja na<br>

                            (vi) Kuratibu uandaaji wa Mpango Mkakati na Bajeti katika Wakala.<br><br><br><br>


                            <h5>2. Kurugenzi ya Ufundi</h5><br>
                            - Kusimamia utekelezaji wa Sheria ya Vipimo Sura Na. 340 na mapitio yake ya mwaka 2002 kwa
                            kuratibu ukaguzi na Uhakiki wa Vipimo vyote vinavyotumika katika Biashara, Afya, Mazingira na
                            Usalama.<br>
                            - Kuratibu utekelezaji wa kanuni ya ufungashaji wa bidhaa za Viwandani na mazao ya Kilimo.
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
    <!-- /contents -->
@endsection
