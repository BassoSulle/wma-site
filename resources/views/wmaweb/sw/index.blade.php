@extends('wmaweb.sw.base_layout')

@section('content')
    <div class="home-page ">
        <!-- Carousel Section with 70% width -->
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
            <ol class="carousel-indicators">
                @foreach ($carousel_items as $key => $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                        {{ $loop->first ? 'class=active' : '' }}></li>
                @endforeach
                <li data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($carousel_items as $key => $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block w-100" alt="{{ $item->description }}"
                            src="{{ asset('storage/' . $item->image) }}">
                        <div class="mask flex-center">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-12 order-md-1 order-2 text-center">
                                        <p class="text-primary" style="font-size: 10px;">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wave-svg max-1920 container sm-hide">
                                <svg width="2000" height="128" x="2000" y="128" viewBox="0 0 2000 128"
                                    enable-background="new 0 0 2000 128" xml:space="preserve">
                                    <path opacity="0.2" fill="#f7f7f7"
                                        d="M1999.5,22.2c-346-0.6-524.6-4.7-878.8,4.4c-286.6,7.4-442.3,54-608.1,51.2C307.3,74.3,202.5,5-0.5,28.1v100.4l2000-0.5V22.2z">
                                    </path>
                                    <path opacity="0.2" fill="#f7f7f7"
                                        d="M-0.3,46.1C251,15.3,440.9,84.7,499.6,98.4c54.7,12.8,122.5,12,186.7-5.3c154.2-41.6,315.5-70.9,475.2-67.5s324.6,22.4,484.3,19.7c133-2.3,302.8,1.7,352.8,3.7c0,21.3,0,80,0,80H-0.5L-0.3,46.1z">
                                    </path>
                                    <path opacity="0.4" fill="#f7f7f7"
                                        d="M2000,41.2c-139.8-12.7-219.9-10.8-360.2-11.2c-285.5-0.8-487.5,18-736.2,51.1C647,115.4,546.7,116.4,199.2,53.6C140.3,43,59.5,45.6-0.5,52.3V130h2000L2000,41.2z">
                                    </path>
                                    <path fill="#EDEEF0"
                                        d="M1634.6,50.1c-193.8,11.9-366.9,24.9-569,50c-110.2,13.7-221.2,21.5-332.3,19.6c-187-3.3-344.5-29.7-560.9-69.8c-122.2-22.6-172.8-4-172.8-4V130h1998V46C1997.5,46,1831,38.1,1634.6,50.1z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Welcome Note Section -->
    <div class="container-fluid mb-3">
        <div class="col-md-12 bg-white py-3 page-content">
            <div class="col-12 px-0 mt-4">

                <div class="row">
                    <div class="col-md-4 my-4 mx-5 col-xs-6">
                        <div
                            class="img-frame p-3 border rounded d-flex justify-content-center align-items-center img-fluid">
                            <img src="https://www.wma.go.tz/uploads/profiles/9-0.30810600%201721628167.png"
                                alt="Prof. Mkumbukwa M. A." class="img-fluid">

                        </div>
                        <center>
                            <div class="">
                                <h5 class="title mb-2"><br>ALBAN M. KIHULLA.</h5>
                                <small>CHIEF EXECUTIVE OFFICER </small>
                            </div>
                        </center>
                    </div>

                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="">
                                <h5 class="title mb-2"><br>Karibu WMA</h5>
                                <small><i></i></small>
                            </div>
                            <div class="col-12 px-0 my-1">
                                <p class="card-text" class="text-justify;"
                                    style="letter-spacing: 0.05em; line-height: 1.5; text-align: justify; text-align-last: left;">
                                    Wakala wa Vipimo ni Wakala ya Serikali ambayo ipo chini ya Wizara ya Viwanda na
                                    Biashara.
                                    Ilianzishwa tarehe 17.05.2002 kwa agizo la Serikali (Government Establishment Order)
                                    Na.194 kupitia
                                    Sheria ya uanzishwaji wa Wakala za Serikali sura 245.Kabla ya kuanzishwa kwake majukumu
                                    yake yalikuwa
                                    yakitekelezwa chini ya idara iliyokuwa ndani Wizara ya Viwanda na Biashara.

                                    Lengo kuu la kuanzishwa Wakala wa Vipimo ni kuboresha huduma zilizokuwa zikitolewa na
                                    Idara hiyo ya Vipimo chini ya Wizara ya Viwanda na Biashara na kupunguza gharama za
                                    uendeshaji kutoka katika mfuko mkuu wa Serikali kuu.

                                    Ili kufanikisha lengo hilo, Wakala wa Vipimo inatekeleza majukumu yake kwa mujibu wa
                                    Sheria ya Vipimo Sura Na. 340. Majukumu yanayotekelezwa kupitia sheria hii ni uhakiki na
                                    ukaguzi wa Vipimo, kutoa ushauri wa kitaalam kwa waundaji wa vipimo hapa nchini,
                                    kuidhinisha miundo ya vipimo mbalimbali kabla ya kuingizwa hapa nchini,
                                    ukaguzi wa bidhaa zilizofungashwa ambazo zinazalishwa kwenye viwanda vyetu vilivyopo
                                    hapa nchini na zile zinazotoka nje ya nchi.
                                    </br>
                                    Wakala wa Vipimo katika utekelezaji wa majukumu yake unasaidia katika kujenga uchumi wa
                                    kisasa, shirikishi na shindani,
                                    msingi mkuu wa kufanikisha haya ni kuwa na viwanda vinavyotumia ipasavyo vilivyohakikiwa
                                    na kukidhi matakwa ya kimataifa (Traceability to International Standards)
                                    ambavyo huongeza tija, ufanisi na usahihi wa vipimo vya bidhaa zinazozalishwa kwenye
                                    viwanda hivyo kuwa shindani katika soko la ndani na la nje matokeo yake ni
                                    kuongeza kasi ya ukuaji wa uchumi na pato la Taifa.
                                    <br>
                                    <br>
                                    <a href="{{ route('welcome_note', ['language' => $current_language]) }} "> Tazama
                                        zaidi..</a>

                                </p>
                                <!-- <a href="aboutus" class="link-no-underline">Tazama zaidi</a> -->
                            </div>
                        </div>
                    </div>


                </div>

                <div class="container-fluid mb-3">
                    <div class="col-md-12 bg-white py-3 page-content">
                        <!-- Section: Announcements, Events, How Do I -->
                        <div class="row my-4">
                            <!-- Announcements Column -->
                            <div class="col-md-4 row">
                                <div class="col-md-12">
                                    <h5 class="section-title"><b>Matangazo</b></h5>
                                    @foreach ($announcements as $item)
                                        <div class="d-flex align-items-start shadow bg-white px-3 pt-4 pb-3">
                                            <div class="icon-announcement pr-2">
                                                <i class="fa fa-bullhorn fa-2x"></i>
                                            </div>
                                            <div>
                                                <h6 class="article-h2 text-uppercase">{{ $item->title }}</h6>
                                                <p><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                                    {{ $item->created_at->format('M j, Y') }}</p>
                                                <p>{{ Str::limit($item->description, 80) }}</p>
                                                <a href="{{ route('announcement_details', ['language' => $current_language, 'slug' => $item->slug]) }}"
                                                    class="read"
                                                    style="width: 100px; background-color: orange; color: white; text-align: center; display: inline-block; padding: 10px; border-radius: 5px;">Read
                                                    more</a>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 justify-content-center mt-4 text-center">
                                    <a href="{{ route('all_announcements', ['language' => $current_language]) }}"
                                        class="link-no-underline" previewlistener="true"><i>Tazama zote <i
                                                class="far fa-arrow-alt-circle-right"></i></i></a>
                                </div>
                            </div>

                            <!-- Events Column -->
                            <div class="col-md-4 row">
                                <div class="col-md-12">
                                    <h5 class="section-title"><b>Matukio</b></h5>
                                    @foreach ($events as $item)
                                        <div class="d-flex align-items-start shadow bg-white px-3 pt-4 pb-3">
                                            <div class="event-thumbnail pr-2">
                                                <img src="{{ asset('storage/' . $item->image) }}"
                                                    style="width: 150px; height: 90px; object-fit: cover;" alt="Thumbnail"
                                                    class="img-thumbnail">
                                            </div>
                                            <div>
                                                <p class="text-justify mb-2">
                                                <h6 class="article-h2 text-uppercase">{{ $item->title }}</h6>
                                                </p>
                                                <p><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                                    {{ $item->created_at->format('M j, Y') }}</p>
                                                <p>{{ Str::limit($item->description, 70) }}
                                                </p>
                                                <a href="{{ route('event_details', ['language' => $current_language, 'slug' => $item->slug]) }}"
                                                    class="read"
                                                    style="width: 100px; background-color: orange; color: white; text-align: center; display: inline-block; padding: 10px; border-radius: 5px;">Read
                                                    more</a>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 justify-content-center mt-4 text-center">
                                    <a href="{{ route('all_events', ['language' => $current_language]) }}"
                                        class="link-no-underline" previewlistener="true"><i>Tazama zote <i
                                                class="far fa-arrow-alt-circle-right"></i></i></a>
                                </div>
                            </div>


                            <!-- How Do I Column -->
                            <div class="col-md-4 text-center">
                                <h5 class="section-title"><b>Nifanyeje</b></h5>
                                <!-- Card style as provided in your code -->
                                <div class="row mt-2 px-xs-0 online-services justify-content-center">
                                    <!-- First service item -->
                                    <div class="service-item col-5 mb-4 mx-2">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/images/licence_icon.png') }}" alt=""
                                                height="40" width="70px" style="margin-bottom: 10px;">
                                        </div>
                                        <div class="service-title">Utaratibu wa Uombaji Leseni</div>
                                        <div class="service-btn-wrapper mt-3">
                                            <a href="{{ route('how_do_i_1', ['language' => $current_language]) }}"
                                                class="serv-btn" style="background-color: orange;">Soma zaidi</a>
                                        </div>
                                    </div>

                                    <!-- Second service item -->
                                    <div class="service-item col-5 mb-4">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/images/doc_approval_icon.png') }}" alt=""
                                                height="40" width="70px" style="margin-bottom: 10px;">
                                        </div>
                                        <div class="service-title">Maombi ya kuidhinisha Vipimo</div>
                                        <div class="service-btn-wrapper mt-3">
                                            <a href="{{ route('how_do_i_2', ['language' => $current_language]) }}"
                                                class="serv-btn" style="background-color: orange;">Soma zaidi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: 100px"></div>


                            <!-- Section: Top News Slider -->
                            <div class="row mt-5">
                                <div class="col-md-9 mx-auto">
                                    <h5 class="text-center section-title"><b>Habari</b></h5>
                                    <div id="topNewsSlider" class="carousel slide shadow bg-white pr-3"
                                        data-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($news_articles as $key => $article)
                                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                    <div class="row">
                                                        <div class="col-md-6 d-flex align-items-center">
                                                            <img src="{{ asset('storage/' . $article->image) }}"
                                                                class="img-fluid" alt="News Image">
                                                        </div>
                                                        <div class="col-md-6 d-flex flex-column justify-content-center">
                                                            <h6 class="article-h2 text-uppercase">{{ $article->title }}
                                                            </h6>
                                                            <p><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                                                {{ $article->created_at->format('M j, Y') }}</p>
                                                            <p>{{ Str::limit($article->description, 150) }}</p>
                                                            <a href="{{ route('new_details', ['language' => $current_language, 'slug' => $article->slug]) }}"
                                                                style="width: 100px; background-color: orange; color: white; text-align: center; display: inline-block; padding: 10px; border-radius: 5px;">Soma
                                                                zaidi</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#topNewsSlider" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#topNewsSlider" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 justify-content-center my-5 text-center">
                                <a href="{{ route('all_news', ['language' => $current_language]) }}"
                                    class="link-no-underline" previewlistener="true"><i>Tazama zote <i
                                            class="far fa-arrow-alt-circle-right"></i></i></a>
                            </div>
                        </div>

                        <!-- Section: Our Core Services -->
                        <div class="row">
                            <div class="col-12 my-3">
                                <h5 class="my-xs-4 text-center text-xs-center section-title"><b>Huduma Zetu</b></h5>
                                <!-- Row of Cards -->
                                <div class="row mt-3 px-xs-0 online-services">
                                    @foreach ($services as $service)
                                        <div class="service-item col-md-3 mx-2">
                                            <div class="service-icon">
                                                <img src="{{ asset('storage/' . $service->icon) }}" alt=""
                                                    width="80px" style="margin-bottom: 10px;">
                                            </div>
                                            <div class="service-title">{{ $service->name }}</div>
                                            <div class="service-btn-wrapper">
                                                <a href="{{ route('service_details', ['language' => $current_language, 'slug' => $service->slug]) }}"
                                                    class="serv-btn" style="background-color: orange;">Soma zaidi</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12 justify-content-center my-4 text-center">
                                <a href="{{ route('all_services', ['language' => $current_language]) }}"
                                    class="link-no-underline" previewlistener="true"><i>Tazama zote <i
                                            class="far fa-arrow-alt-circle-right"></i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
