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
                                <li class="breadcrumb-item list-inline-item active">Core Values</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Core Values</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="core values">
                            <h5 style="font-weight:bold">Result oriented</h5>
                            Ø WMA is intended in the final outcome rather than going through the process.<br><br><br>

                            <h5 style="font-weight:bold">Team work</h5>
                            Ø WMA staffs work collaboratively to achieve the Agency’s goal.<br><br>

                            <h5 style="font-weight:bold">Professional Excellence</h5>
                            Ø WMA staffs try their level best to use their profession and skills to perform their duties at
                            excellent level.<br><br>

                            <h5 style="font-weight:bold">Customer focus</h5>
                            Ø The orientation of WMA towards serving its clients.<br><br>

                            <h5 style="font-weight:bold">Transparence</h5>
                            Ø WMA staff intends to work honestly and openly. <br><br>

                            <h5 style="font-weight:bold">Accountability</h5>
                            Ø WMA staff intends to be responsible for what they do and be able to give a satisfactory reason
                            for it.<br><br>



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
