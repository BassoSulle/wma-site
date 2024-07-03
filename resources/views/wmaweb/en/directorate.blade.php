@extends('wmaweb.en.base_layout')
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
                                <li class="breadcrumb-item list-inline-item active">Directorate</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Directorate</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                                <h5>We have two Directorate</h5><br>


                               <h5>1. Directorate of Business Support (DBS)</h5><br>
                                     - It's Objective is to ensure proper management of resources and application of ICT for development of the Agency. Thus, DBS<br>

                                     (i) Provide advice on organizational efficiency and Business Process improvement;<br>

                                     (ii) Facilitate implementation of Agency’s policies and mandate;<br>

                                     (iii) Establish and provide technical advice on financial and physical resources management system;<br>

                                     (iv) Ensure Cross-cutting issues are addressed in the Strategic Plans;<br>
                                     (v) Ensure effective use of Physical and financial resources and<br>

                                     (vi) Coordinate Strategic Planning and Budgeting in the Agency.<br><br><br><br>


                               <h5>2. Directorate of Technical Services</h5><br>
                               -It's Objective is to direct Operational and fiscal activities in Legal metrological control to ensure the public of
                               correct measurement results when used in public and private transactions in areas of trade, safety, health and
                               environment.





                            </p>

                        </div>
                    </div>

                    <div class="col-md-3">
                        {{-- Anouncement and news --}}
                        <div class="row ml-2 mr-0">
                            <div class="col-md-12">
                                <h5 class="my-xs-2 text-center text-xs-center"><b>Announcements</b></h5>
                                <div class="row mt-0">
                                    <div class="col-md-12 col-12 pb-2 mb-2 px-xs-2 p-4">
                                        {{-- @foreach ($news_articles as $article) --}}
                                        <div href="#" target="_blank">
                                            <div class="row align-items-center bg-light1">
                                                <div class="col-2 col-md-3">
                                                    <img src="https://www.wma.go.tz/uploads/1718109034-4Z9A8735.jpg"
                                                        style="width: 128px; height: 90px; object-fit: cover;"
                                                        class="img-thumbnail" />
                                                    {{-- <img src="{{ asset('storage/'.$article->img) }}" alt="Thumbnail" class="img-thumbnail"> --}}
                                                </div>
                                                <div class="col-10 col-md-9">
                                                    <p class="text-justify mb-2">
                                                        <b>
                                                            <h6 class="article-h2">TANGAZO KWA WAUZAJI WA SARUJ</h6>
                                                        </b>
                                                    </p>
                                                    <p><i class="fa fa-calendar" style="color: #006f8b;"></i>Feb 27 2024
                                                    </p>
                                                    <p>Wakala wa Vipimo ni Taasisi ya Serikali iliyopo chini ya...
                                                    </p>
                                                    <a href="" class="read ml-2">Read more</a>
                                                </div>
                                            </div>
                                            <div style="margin-top: 20px"></div>
                                            <div class="row align-items-center bg-light1">
                                                <div class="col-2 col-md-3">
                                                    <img src="https://www.wma.go.tz/uploads/news/medium/1717517519-4Z9A8371.jpg"
                                                        style="width: 128px; height: 90px; object-fit: cover;"
                                                        class="img-thumbnail" />
                                                    {{-- <img src="{{ asset('storage/'.$article->img) }}" alt="Thumbnail" class="img-thumbnail"> --}}
                                                </div>
                                                <div class="col-10 col-md-9">
                                                    <p class="text-justify mb-2">
                                                        <b>
                                                            <h6 class="article-h2">TANGAZO KWA WAUZAJI WA SARUJ</h6>
                                                        </b>
                                                    </p>
                                                    <p><i class="fa fa-calendar" style="color: #006f8b;"></i>Feb 27 2024
                                                    </p>
                                                    <p>Wakala wa Vipimo ni Taasisi ya Serikali iliyopo chini ya...
                                                    </p>
                                                    <a href="" class="read ml-2">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr">
                                        {{-- @endforeach --}}
                                        <!-- Add a link for "Tazama Zote" -->
                                        <div class="row justify-content-center mt-3">
                                            {{-- <a href="{{ route('news.all_articles', ['language' => $current_language]) }}" class="link-no-underline"><i>See all <i class="far fa-arrow-alt-circle-right"></i></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Top Events --}}
                            <div class="col-md-12 my-3">
                                <h5 class="my-xs-4 text-center text-xs-center"><b>Top Events</b></h5>
                                <div class="row mt-0">
                                    <div class="col-md-12 pb-2 mb-2">
                                        <div class="col-12 px-xs-2 p-4">
                                            {{-- @foreach ($news_articles as $article) --}}
                                            <div href="#" target="_blank">
                                                <div class="row align-items-center bg-light1">
                                                    <div class="col-2 col-md-3">
                                                        {{-- <img src="{{ asset('storage/'.$article->img) }}" alt="Thumbnail" class="img-thumbnail"> --}}
                                                        <img src="https://www.wma.go.tz/uploads/news/medium/1716281495-LO2A0468%20sokoni.jpg"
                                                            style="width: 128px; height: 90px; object-fit: cover;"
                                                            alt="Thumbnail" class="img-thumbnail">
                                                    </div>
                                                    <div class="col-10 col-md-9">
                                                        <p class="text-justify mb-2">
                                                            <b>
                                                                <h6 class="article-h2">World Metrology Day 2023</h6>
                                                            </b>
                                                        </p>
                                                        <p><i class="fa fa-calendar" style="color: #006f8b;"></i>Jule 12
                                                            2024</p>
                                                        <p>WMA ILALA
                                                        </p>
                                                        <a href="" class="read ml-2">Read more</a>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 20px"></div>
                                                <div class="row align-items-center bg-light1">
                                                    <div class="col-2 col-md-3">
                                                        {{-- <img src="{{ asset('storage/'.$article->img) }}" alt="Thumbnail" class="img-thumbnail"> --}}
                                                        <img src="https://www.wma.go.tz/uploads/news/medium/1717157606-4Z9A8201%20mbb.jpg"
                                                            style="width: 128px; height: 90px; object-fit: cover;"
                                                            alt="Thumbnail" class="img-thumbnail">
                                                    </div>
                                                    <div class="col-10 col-md-9">
                                                        <p class="text-justify mb-2">
                                                            <b>
                                                                <h6 class="article-h2">World Metrology Day 2023</h6>
                                                            </b>
                                                        </p>
                                                        <p><i class="fa fa-calendar" style="color: #006f8b;"></i>Jule 12
                                                            2024</p>
                                                        <p>WMA ILALA
                                                        </p>
                                                        <a href="" class="read ml-2">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="hr">
                                            {{-- @endforeach --}}
                                            <!-- Add a link for "Tazama Zote" -->
                                            <div class="row justify-content-center mt-3">
                                                {{-- <a href="{{ route('news.all_articles', ['language' => $current_language]) }}" class="link-no-underline"><i>See all <i class="far fa-arrow-alt-circle-right"></i></i></a> --}}
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @include('tirdoweb.en.newsection') --}}

            </div>
        </div>
    </div>

    </div>
    <!-- /contents -->
@endsection
