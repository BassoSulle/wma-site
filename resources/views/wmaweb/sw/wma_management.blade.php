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
                                <li class="breadcrumb-item list-inline-item active">WMA Management</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 bg-white py-2 page-content">
                        <h4>WMA Management</h4>
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-4 col-sm-6">
                                <div class="post-module">
                                    <div class="thumbnail">
                                        <img class="w-100 bg-white" src="{{ asset('assets/images/shaban.png') }}"
                                            alt="ENG. SHABAN SELEMAN">
                                    </div>
                                    <div class="post-content">
                                        <div class="category">Member</div>
                                        <h6 class="sub_title">
                                            <p class="card-text fw-medium">ENG. SHABAN SELEMAN</p>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /contents -->
@endsection
