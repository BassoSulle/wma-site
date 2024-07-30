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
                                <li class="breadcrumb-item list-inline-item active">Ripoti</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Ripoti</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="organization structure">
                                Kazi Inaendelea ...

                                {{-- <a href="https://www.wma.go.tz/uploads/files/Audited%20Financial%20statement%202021-22.pdf">Audited Financial statements 2021 - 2022</a> --}}

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