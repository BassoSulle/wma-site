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
                                <li class="breadcrumb-item list-inline-item active">Wajumbe wa Bodi</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Wajumbe wa Bodi</h4>
                        <div class="container mb-3">
                            <div class="row mt-4 justify-content-center">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/Eliza.png') }}"
                                                alt="DR. ELIZA ALFRED MWAKASANGULA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Mwenyekiti</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">DK. ELIZA ALFRED MWAKASANGULA.</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/kihula.png') }}"
                                                alt="ALBAN M. KIHULLA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Katibu</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">ALBAN M. KIHULLA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/anna.png') }}"
                                                alt="MS. ANNA PETER KIANGO">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Mjumbe</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">BI. ANNA PETER KIANGO</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/mwambapa.png') }}"
                                                alt="MR. JUMA SETH MWAMBAP">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Mjumbe</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">Bwana. JUMA SETH MWAMBAPA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/swalehe.png') }}"
                                                alt="MR. SWALEHE SAID CHONDOMA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Mjumbe</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">BWANA. SWALEHE SAID CHONDOMA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/gibson.png') }}"
                                                alt="DR. GIBSON HOSEA MUNISI">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Mjumbe</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">DK. GIBSON HOSEA MUNISI</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/shaban.png') }}"
                                                alt="ENG. SHABAN SELEMAN">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Mjumbe</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">ENG. SHABAN SELEMAN</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/hassan-hamza.png') }}"
                                                alt="MR. HASSAN HAMZA NKYA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">Mjumbe</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">BWANA. HASSAN HAMZA NKYA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

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
    <!-- /contents -->
@endsection
