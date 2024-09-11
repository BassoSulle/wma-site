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
                                <li class="breadcrumb-item list-inline-item active">Maswali Yaulizwayo Mara kwa Mara
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <style>
                        .faq dt {
                            position: relative;
                            font: 700 16px Georgia;
                            padding: 4px 0 10px;
                        }

                        .faq dd,
                        .faq dt {
                            padding-left: 50px !important;
                        }

                        .faq dd {
                            margin: 0 0 50px;
                            font-size: 16px;
                        }

                        .faq dd,
                        .faq dt {
                            padding-left: 50px !important;
                        }

                        dd {
                            margin-left: 0;
                        }

                        address,
                        blockquote .small,
                        blockquote footer,
                        blockquote small,
                        dd,
                        dt,
                        pre {
                            line-height: 1.42857;
                        }

                        dt,
                        kbd kbd,
                        label {
                            font-weight: 700;
                        }

                        .faq {
                            counter-reset: a;
                            /* Reset the counter */
                        }

                        .faq dt:before {
                            content: counter(a);
                            counter-increment: a;
                            position: absolute;
                            left: 0;
                            top: 0;
                            font: 700 50px / 1 Verdana, Geneva, sans-serif;
                        }
                    </style>
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Maswali Yaulizwayo Mara kwa Mara</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <div class="faq">
                                <dl>
                                    @foreach ($faqs as $item )
                                    <dt> {{$item->question}}</dt>
                                    <dd>Ans: {{$item->answer}}</dd>
                                    @endforeach
                                    
                                </dl>
                                <ul class="pagination">
                                    <li> </li>
                                </ul>
                            </div>
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
