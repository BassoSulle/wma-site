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
                                <li class="breadcrumb-item ">
                                    <a href="{{ route('home', ['language' => $current_language]) }}"><span
                                            class="fas fa-home"></span></a>
                                </li>
                                <li class="breadcrumb-item list-inline-item active">Menejimenti ya WMA</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 bg-white py-3 page-content">
                        <h4 class="px-3">Menejimenti ya WMA</h4>
                        <div class="container mb-3">
                            <h5 class="mt-4 py-2" style="background-color: #f89629; color: #000;"><span class="px-2">AFISA
                                    MTENDAJI MKUU</span>
                            </h5>
                            <div class="row mt-4 justify-content-center">
                                <div class="col-md-3 col-sm-12 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/kihula.png') }}"
                                                alt="KARIM H. MKOREHE">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">AFISA MTENDAJI MKUU
                                            </div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">ALBAN M. KIHULLA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4 py-2" style="background-color: #f89629; color: #000;"><span
                                    class="px-2">WAKURUGENZI</span>
                            </h5>
                            <div class="row mt-4 justify-content-center">
                                <div class="col-md-3 col-sm-12 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/KARIM H. MKOREHE.png') }}"
                                                alt="KARIM H. MKOREHE">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MKURUGENZI</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">KARIM H. MKOREHE</p>
                                            </h6>
                                        </div>
                                        <h6 class="sub_title">
                                            <p class="card-text fw-medium text-center">KAIMU MKURUGENZI HUDUMA ZA BIASHARA
                                            </p>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-4 py-2" style="background-color: #f89629; color: #000;"><span class="px-2">WAKUU
                                    WA VITENGO</span>
                            </h5>
                            <div class="row mt-4 justify-content-center">
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/JOSEPH MALITI.png') }}"
                                                alt="JOSEPH MALITI">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MKUU WA KITENGO CHA
                                                UNUNUZI NA UGAVI</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">JOSEPH MALITI</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white" src="{{ asset('assets/images/ROSE JUMA.png') }}"
                                                alt="ROSE JUMA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MKUU WA KITENGO CHA
                                                TEHAMA NA TAKWIMU</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">ROSE JUMA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/NELSON J. RUTURAGARA.png') }}"
                                                alt="NELSON J. RUTURAGARA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MKUU WA KITENGO CHA
                                                MIPANGO</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">NELSON J. RUTURAGARA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/CHRISTOPHER MWAKIBINGA.png') }}"
                                                alt="CHRISTOPHER MWAKIBINGA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MKUU WA KITENGO CHA
                                                UKAGUZI WA NDANI</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">CHRISTOPHER MWAKIBINGA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/ADV. OSCAR A. NGITU.png') }}"
                                                alt="ADV. OSCAR A. NGITU">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MKUU WA KITENGO CHA
                                                SHERIA</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">ADV. OSCAR A. NGITU</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- SECTION MANAGERS --}}

                            <h5 class="mt-4 py-2" style="background-color: #f89629; color: #000;"><span
                                    class="px-2">MAMENEJA WA SEHEMU</span>
                            </h5>
                            <div class="row mt-4 justify-content-center">
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/PENDO KIPANGULA.png') }}"
                                                alt="PENDO KIPANGULA">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">KAIMU MENEJA UTAWALA
                                                NA RASILIMALI WATU
                                            </div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">PENDO KIPANGULA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/ROBERT MAKULE.png') }}" alt="ROBERT MAKULE">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MENEJA SEHEMU YA
                                                UPIMAJI</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">ROBERT MAKULE</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/ALMACHIUS K. PASTORY.png') }}"
                                                alt="ALMACHIUS K. PASTORY">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MENEJA SEHEMU YA
                                                SURVEILLANCE</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">ALMACHIUS K. PASTORY</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/MAGESA H. BIYANI.png') }}"
                                                alt="MAGESA H. BIYANI">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">MENEJA SEHEMU YA
                                                VIWANGO NA UHAKIKI WA VIPIMO</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">MAGESA H. BIYANI</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="post-module">
                                        <div class="thumbnail">
                                            <img class="w-100 bg-white"
                                                src="{{ asset('assets/images/CPA. ALBERT KITALE.png') }}"
                                                alt="CPA. ALBERT KITALE">
                                        </div>
                                        <div class="post-content mx-0 px-0 text-center">
                                            <div class="category" style="background-color: #f89629;">KAIMU MENEJA SEHEMU
                                                YA FEDHA NA UHASIBU</div>
                                            <h6 class="sub_title">
                                                <p class="card-text fw-medium">NELSON J. RUTURAGARA</p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            {{-- End of section managers --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contents -->
@endsection
