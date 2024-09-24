@extends('wmaweb.en.base_layout')

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
                                <h5 class="title mb-2"><br>Welcome to WMA</h5>
                                <small><i></i></small>
                            </div>
                            <div class="col-12 px-0 my-2">
                                <p class="card-text" class="text-justify;"
                                    style="letter-spacing: 0.05em; line-height: 1.5;">
                                    The history of Weights and Measures is traced back since the early human civilisation.
                                    Measurement System is undoubtedly one of man’s greatest and most important inventions
                                    that cannot be left aside in the history of evolution of civilisation. Every human being
                                    on our planet is affected by measurements in one way or another. Imagine, from the
                                    moment
                                    we are born and throughout our daily lives, the act of weighing or measuring is an
                                    important
                                    and often vital part of our existence. Our bodies, the food we eat and all the products
                                    we
                                    use as an integral part of modern living have all been weighed and measured at some
                                    stage
                                    or another in their development.
                                    </br>
                                    </br>
                                    It is almost impossible to describe anything without
                                    referring to weights and measures. Therefore, weighing or measuring is natural and vital
                                    part of our everyday life.

                                    Economies in the world depend on reliable measurements that are trusted and accepted
                                    internationally.
                                    This facilitates trade and reduces transaction costs.
                                    <br>
                                    <br>
                                    {{-- <a href="{{ route('aboutus', ['language' => $current_language]) }}" class=""> --}}
                                    <a href="#"> Read more..</a>
                                </p>
                                <!-- <a href="aboutus" class="link-no-underline">Read more</a> -->
                            </div>
                        </div>
                    </div>


                </div>

    <div class="container-fluid mb-3">
        <div class="col-md-12 bg-white py-3 page-content">
            <!-- Section: Announcements, Events, How Do I -->
            <div class="row my-4">
                <!-- Announcements Column -->
                <div class="col-md-4">
                    @foreach ($announcements as $item)
                    <h5 class="section-title"><b>Announcements</b></h5>
                    <div class="d-flex align-items-start">
                        <div class="icon-announcement pr-2">
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <div>
                            <b>
                                <h6 class="article-h2 text-uppercase">{{ $item->title }}</h6>
                                <p><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                    {{ $item->created_at->format('M j, Y') }}</p>
                                <p>{{ Str::limit($item->description, 30) }}</p>
                            </b>
                            <a href="" class="read ml-2">Read more</a>

                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Events Column -->
                <div class="col-md-4">
                    @foreach ($events as $item)
                    <h5 class="section-title"><b>Events</b></h5>
                    <div class="d-flex align-items-start">
                        <div class="event-thumbnail pr-2">
                            <img src="{{ asset('storage/' . $item->image) }}"
                            style="width: 150px; height: 90px; object-fit: cover;" alt="Thumbnail"
                            class="img-thumbnail">
                        </div>
                        <div>
                            <p class="text-justify mb-2">
                                <b>
                                    <h6 class="article-h2 text-uppercase">{{ $item->title }}</h6>
                                </b>
                            </p>
                            <p><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                {{ $item->created_at->format('M j, Y') }}</p>
                            <p>{{ Str::limit($item->description, 30) }}
                            </p>
                            <a href="" class="read ml-2">Read more</a>
                        </div>
                    </div>
                    @endforeach
                </div>


            <!-- How Do I Column -->
                <div class="col-md-4 text-center">
                    <h5 class="section-title"><b>How Do I</b></h5>
                    <!-- Card style as provided in your code -->
                    <div class="row mt-4 px-xs-0 online-services flex-column align-items-center">
                        <!-- First service item -->
                        <div class="service-item col-4 mb-4">
                            <div class="service-icon">
                                <img src="{{ asset('assets/images/licence_icon.png') }}" alt="" height="40" width="70px" style="margin-bottom: 10px;">
                            </div>
                            <div class="service-title">Request for the Licence</div>
                            <div class="service-btn-wrapper mt-3">
                                <a target="_blank" href="https://www.wma.go.tz/howdo/6" class="serv-btn orange">Get instruction</a>
                            </div>
                        </div>

                        <!-- Second service item -->
                        <div class="service-item col-4 mb-4">
                            <div class="service-icon">
                                <img src="{{ asset('assets/images/doc_approval_icon.png') }}" alt=""  height="40" width="70px" style="margin-bottom: 10px;">
                            </div>
                            <div class="service-title">Request for the Pattern Approval</div>
                            <div class="service-btn-wrapper mt-3">
                                <a target="_blank" href="https://www.wma.go.tz/howdo/4" class="serv-btn orange">Get instruction</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div style="margin-top: 100px"></div>


          <!-- Section: Top News Slider -->
            <div class="row my-4">
                <div class="col-md-9 mx-auto">
                    <h5 class="text-center section-title"><b>Top News</b></h5>
                    <div id="topNewsSlider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($news_articles as $key => $article)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="row">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid" alt="News Image">
                                        </div>
                                        <div class="col-md-6 d-flex flex-column justify-content-center">
                                            <h6 class="article-title">{{ $article->title }}</h6>
                                            <p>{{ Str::limit($article->description, 150) }}</p>
                                            <a href="#" style="width: 100px; background-color: orange; color: white; text-align: center; display: inline-block; padding: 10px; border-radius: 5px;">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#topNewsSlider" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#topNewsSlider" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

           <!-- Section: Our Core Services -->
<div class="col-12 my-3">
    <h5 class="my-xs-4 text-center text-xs-center section-title"><b>Our Core Services</b></h5>

    <!-- First Row of Cards -->
    <div class="row mt-4 px-xs-0 online-services">
        <div class="service-item col mx-2">
            <div class="service-icon">
                <img src="{{ asset('assets/images/licence_icon.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
            </div>
            <div class="service-title">Vehicle Tank Verification (VTV)</div>
            <div class="service-btn-wrapper">
                <a target="_blank" href="" class="serv-btn orange">Read More</a>
            </div>
        </div>

        <div class="service-item col mx-2">
            <div class="service-icon">
                <img src="{{ asset('assets/images/doc_approval_icon.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
            </div>
            <div class="service-title">Sandy & Ballast Lorry (SBL)</div>
            <div class="service-btn-wrapper">
                <a target="_blank" href="" class="serv-btn orange">Read More</a>
            </div>
        </div>

        <div class="service-item col mx-2">
            <div class="service-icon">
                <img src="{{ asset('assets/images/service_icon1.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
            </div>
            <div class="service-title">Fixed Storage Tank (FST) & Bulk Storage Tank (BST)</div>
            <div class="service-btn-wrapper">
                <a target="_blank" href="" class="serv-btn orange">Read More</a>
            </div>
        </div>

        <div class="service-item col mx-2">
            <div class="service-icon">
                <img src="{{ asset('assets/images/service_icon2.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
            </div>
            <div class="service-title">Pre-packages</div>
            <div class="service-btn-wrapper">
                <a target="_blank" href="" class="serv-btn orange">Read More</a>
            </div>
        </div>
    </div>

        <!-- Second Row of Cards -->
            <div class="row mt-4 px-xs-0 online-services">
                <div class="service-item col mx-2">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/service_icon3.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
                    </div>
                    <div class="service-title">Wagon Tank (WGT)</div>
                    <div class="service-btn-wrapper">
                        <a target="_blank" href="" class="serv-btn orange">Read More</a>
                    </div>
                </div>

                <div class="service-item col mx-2">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/service_icon4.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
                    </div>
                    <div class="service-title">Fuel Pump & CNG Filling Station</div>
                    <div class="service-btn-wrapper">
                        <a target="_blank" href="" class="serv-btn orange">Read More</a>
                    </div>
                </div>

                <div class="service-item col mx-2">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/service_icon5.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
                    </div>
                    <div class="service-title">Flow Meter (F/M) & Check Pump (Ch/p)</div>
                    <div class="service-btn-wrapper">
                        <a target="_blank" href="" class="serv-btn orange">Read More</a>
                    </div>
                </div>

                <div class="service-item col mx-2">
                    <div class="service-icon">
                        <img src="{{ asset('assets/images/service_icon6.png') }}" alt="" width="80px" style="margin-bottom: 10px;">
                    </div>
                    <div class="service-title">Water Meter & Metrological Supervision </div>
                    <div class="service-btn-wrapper">
                        <a target="_blank" href="" class="serv-btn orange">Read More</a>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </div>
</div>
@endsection
