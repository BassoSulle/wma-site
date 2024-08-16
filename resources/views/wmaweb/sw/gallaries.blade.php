@extends('wmaweb.sw.base_layout')

@section('content')
    <div class="container">
        <div class="col-12 special-page">
            <div class="col-12 py-4 px-0">
                <div class="row">
                    <div class="col-12 px-xs-0 px-1">
                        <nav aria-label="breadcrumb" class="mb-0">
                            <ol class="breadcrumb px-0">
                                <li class="breadcrumb-item ">
                                       <a href="{{ route('home', ['language' => $current_language]) }}"><span
                                            class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item list-inline-item active">Maktaba ya Picha</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Maktaba ya Picha</h4>
                        <div class="row mt-4">
                            <div class="col-md-4 pb-3 mb-3">
                                <div class="image-wrapper">
                                    <a href="https://www.youtube.com/watch?v=Pzed721iKWU" class="strip" data-strip-caption="WAFANYABIASHARA WA GESI WAPATIWA ELIMU NA WAKALA WA VIPIMO." data-strip-options="side: 'top'">
                                        <img src="https://www.wma.go.tz/uploads/video_thumbs/1683528028-4Z9A8377 gesi.jpg" alt="Gallery Thumb">
                                    </a>
                                    {{-- <a href="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG" class="strip" data-strip-caption="Nanenane exibition" data-strip-options="side: 'right'" data-strip-group="001">
                                        <img class="lazy" data-original="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG" alt="" style="display: inline;" src="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG"> --}}

                                        </a>
                                </div>
                                <div class="col-12 bg-light px-xs-2 p-3">
                                    <div>
                                        <p class="text-justify mb-2">
                                            <b>
                                                <h6 class="article-h2">AWARERNESS</h6>
                                            </b>
                                            (12 Picha)
                                            <i class="fa fa-calendar blue-icon" style="color: #006f8b;"></i> 1 years ago
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 pb-3 mb-3">
                                <div class="image-wrapper">
                                    <a href="https://www.youtube.com/watch?v=Pzed721iKWU" class="strip" data-strip-caption="WAFANYABIASHARA WA GESI WAPATIWA ELIMU NA WAKALA WA VIPIMO." data-strip-options="side: 'top'">
                                        <img src="https://www.wma.go.tz/uploads/video_thumbs/1683528028-4Z9A8377 gesi.jpg" alt="Gallery Thumb">
                                    </a>
                                    {{-- <a href="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG" class="strip" data-strip-caption="Nanenane exibition" data-strip-options="side: 'right'" data-strip-group="001">
                                        <img class="lazy" data-original="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG" alt="" style="display: inline;" src="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG"> --}}

                                        </a>
                                </div>
                                <div class="col-12 bg-light px-xs-2 p-3">
                                    <div>
                                        <p class="text-justify mb-2">
                                            <b>
                                                <h6 class="article-h2">AWARERNESS</h6>
                                            </b>
                                            (32 Picha)
                                            <i class="fa fa-calendar blue-icon" style="color: #006f8b;"></i> 2 years ago
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{--  --}}


                            <div class="col-md-4 pb-3 mb-3">
                                <div class="image-wrapper">
                                    <a href="https://www.youtube.com/watch?v=Pzed721iKWU" class="strip" data-strip-caption="WAFANYABIASHARA WA GESI WAPATIWA ELIMU NA WAKALA WA VIPIMO." data-strip-options="side: 'top'">
                                        <img src="https://www.wma.go.tz/uploads/video_thumbs/1683528028-4Z9A8377 gesi.jpg" alt="Gallery Thumb">
                                    </a>
                                    {{-- <a href="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG" class="strip" data-strip-caption="Nanenane exibition" data-strip-options="side: 'right'" data-strip-group="001">
                                        <img class="lazy" data-original="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG" alt="" style="display: inline;" src="https://www.wma.go.tz/uploads/1481792964-DSC_1022.JPG"> --}}

                                        </a>
                                </div>
                                <div class="col-12 bg-light px-xs-2 p-3">
                                    <div>
                                        <p class="text-justify mb-2">
                                            <b>
                                                <h6 class="article-h2">AWARERNESS</h6>
                                            </b>
                                            (20 Picha)
                                            <i class="fa fa-calendar blue-icon" style="color: #006f8b;"></i> 3 years ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                               {{-- <h5>Under Constraction..!</h5> --}}


                        </div>
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.sw.announcments_and_events')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
