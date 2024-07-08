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
                                <li class="breadcrumb-item list-inline-item active">Directorates</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Directorate</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                            <h5>We have two Directorate</h5><br>


                            <h5>1. Directorate of Business Support (DBS)</h5><br>
                            - It's Objective is to ensure proper management of resources and application of ICT for
                            development of the Agency. Thus, DBS<br>

                            (i) Provide advice on organizational efficiency and Business Process improvement;<br>

                            (ii) Facilitate implementation of Agency’s policies and mandate;<br>

                            (iii) Establish and provide technical advice on financial and physical resources management
                            system;<br>

                            (iv) Ensure Cross-cutting issues are addressed in the Strategic Plans;<br>
                            (v) Ensure effective use of Physical and financial resources and<br>

                            (vi) Coordinate Strategic Planning and Budgeting in the Agency.<br><br><br><br>


                            <h5>2. Directorate of Technical Services</h5><br>
                            -It's Objective is to direct Operational and fiscal activities in Legal metrological control to
                            ensure the public of
                            correct measurement results when used in public and private transactions in areas of trade,
                            safety, health and
                            environment.





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
