@extends('wmaweb.en.base_layout')

@section('content')
    <div class="container">
        <div class="col-12 special-page">
            <div class="col-12 py-4 px-0">
                <div class="row">
                    <div class="col-12 px-xs-0 px-1">
                        <nav aria-label="breadcrumb" class="mb-0">
                            <ol class="breadcrumb px-0">
                                <li class="breadcrumb-item ">
                                      <a  href="{{ route('home', ['language' => $current_language]) }}"><span
                                            class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item list-inline-item active">Videos</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Videos</h4>
                        <div class="row mt-4">
                            <div class="col-md-4 pb-3 mb-3">
                                <div class="image-wrapper">
                                    <a href="https://www.youtube.com/watch?v=pRmCniSPgEE" class="strip" data-strip-caption="WAKALA WA VIPIMO MKOA WA KIGOMA YAHIMIZWA KUENDELEA KUSIMAMIA MATUMIZI SAHIHI YA VIPIMO KWENYE MAWESE" data-strip-options="side: 'top'"><img src="https://www.wma.go.tz/uploads/video_thumbs/1683527363-4Z9A9176 kigoma.jpg" alt="Gallery Thumb">
                                    </a>
                                </div>
                                <div class="col-12 bg-light px-xs-2 p-3">
                                    <div>
                                        <p class="text-justify mb-2">
                                            <b>
                                                <h6 class="article-h2">WAKALA WA VIPIMO MKOA WA KIGOMA YAHIMIZWA KUENDELEA KUSIMAMIA MATUMIZI SAHIHI YA VIPIMO KWENYE MAWESE</h6>
                                            </b>
                                            <i class="fa fa-calendar blue-icon" style="color: #006f8b;"></i> 1 year ago
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 pb-3 mb-3">
                                <div class="image-wrapper">
                                    <a href="https://www.youtube.com/watch?v=Pzed721iKWU" class="strip" data-strip-caption="WAFANYABIASHARA WA GESI WAPATIWA ELIMU NA WAKALA WA VIPIMO." data-strip-options="side: 'top'"><img src="https://www.wma.go.tz/uploads/video_thumbs/1683528028-4Z9A8377 gesi.jpg" alt="Gallery Thumb">
                                    </a>
                                </div>
                                <div class="col-12 bg-light px-xs-2 p-3">
                                    <div>
                                        <p class="text-justify mb-2">
                                            <b>
                                                <h6 class="article-h2">WAFANYABIASHARA WA GESI WAPATIWA ELIMU NA WAKALA WA VIPIMO.</h6>
                                            </b>
                                            <i class="fa fa-calendar blue-icon" style="color: #006f8b;"></i> 6 years ago
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 pb-3 mb-3">
                                <div class="image-wrapper">
                                    <a href="https://www.youtube.com/watch?v=DJkyYk-zfKo" class="strip" data-strip-caption="Deputy Permanent Secretary visit at WMA" data-strip-options="side: 'top'">
                                        <img src="https://www.wma.go.tz/uploads/video_thumbs/1513857699-DSC_0544.JPG" alt="Gallery Thumb">
                                    </a>
                                </div>
                                <div class="col-12 bg-light px-xs-2 p-3">
                                    <div>
                                        <p class="text-justify mb-2">
                                            <b>
                                                <h6 class="article-h2">Deputy Permanent Secretary visit at WMA</h6>
                                            </b>
                                            <i class="fa fa-calendar blue-icon" style="color: #006f8b;"></i> 6 years ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.en.announcments_and_events')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
