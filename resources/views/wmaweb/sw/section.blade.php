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
                                <li class="breadcrumb-item list-inline-item active">Sehemu</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Sehemu</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p>Wakala wa Vipimo ina Sehemu Sita:-<br>


                            <h5>1. Sehemu ya Elimu, Habari na Mawasiliano</h5>
                            -Kusimamia shughuli zote za Mawasiliano kwa wateja wa ndani na nje ya taasisi ikiwa ni pamoja na
                            kutoa elimu kwa Umma juu ya shughuli za taasisi na kushughulikia malalamiko ya wadau<br><br>


                            <h5>2. Sehemu ya Utawala na rasilimali watu</h5>
                            -Inashughulika na usimamizi wa rasirimali za taasisi<br><br>


                            <h5>3.Sehemu ya Fedha na Uhasibu</h5>
                            -Inashughulikia masuala yote ya fedha na uhasibu ndani ya taasisi<br><br>


                            <h5>4. Sehemu ya Upimaji</h5>
                            -Inashughulika na masuala yote ya upimaji ndani ya taasisi<br><br>


                            <h5>5. Sehemu ya Viwango na uhakikin</h5>
                            -Inashughulika na usimamizi na uhakiki wa Vipimo<br><br>

                            <h5>5. Sehemu ya Surveillance</h5>
                            -kusimamia utendaji kazi wa ofisi za mikoa na kufanya kaguzi za kushtukiza<br>
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
