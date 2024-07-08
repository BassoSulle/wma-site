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
                                <li class="breadcrumb-item list-inline-item active">Audit Report 2020-2021</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Audit Report 2020-2021</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="organization structure">

                                    <a href="https://www.wma.go.tz/uploads/files/WEIGHTS%20AND%20MEASURES%20AGENCY%20(WMA)%20_AUDIT%20REPORT_%202020_2021%20(1).pdf">weights and measures agency (wma) audit report 2020-2021</a>





                            </p>

                        </div>
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.en.announcments_and_events')
                    </div>

                </div>

            </div>
        </div>
    </div>

    </div>
    <!-- /contents -->
@endsection
