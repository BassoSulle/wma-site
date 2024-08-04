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
                                <li class="breadcrumb-item list-inline-item active">Vitengo</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Vitengo</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p>Wakala wa Vipimo kuna vitengo vinne:-</p>
                            <p class="unit">

                            <h5>1. Kitengo cha Sheria</h5>
                            -Kinashughulikia na kutoa ushauri wa Kisheria katika mambo yote yanayohusu taasisi
                            <br>
                            <br>


                            <h5>2. Kitengo cha Mipango</h5>
                            -Kinahusika na kuratibu shughuli zote za mipango za taasisi<br><br>


                            <h5>3. Kitengo cha Ugavi na Manunuzi</h5>
                            -Kinashughulikia maswala yote ya ununuzi na ugavi ndani ya taasisi<br><br>


                            <h5>4. Kitengo cha Ukaguzi wa ndani</h5>
                            -Kitengo hiki humsaidia Mtendaji Mkuu katika kusimamia mifumo ya uthibiti wa ndani<br>

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

    </div>
    <!-- /contents -->
@endsection
