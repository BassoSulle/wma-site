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
                                <li class="breadcrumb-item list-inline-item active">Units</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Units</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="unit">

                            <h5>1.Legal Unit</h5>
                            -Represent WMA in Legal litigations<br>
                            - Provide advise on matters arising from regional and International affiliation in relation to
                            legal metrology laws<br>
                            - Liaise with the office of Attorney General on appearance in court and quasi-judicial
                            bodies<br><br>


                            <h5>2. Planning, Monitoring and Evaluation Unit</h5>
                            -Coordinate preparation of the Agency's plans (Strategic Plans, Budgets and Action plans)<br>

                            -Coordinate preparations of Quarterly, Mid - year and Annual performance reports (Periodic
                            reports)<br>
                            - Coordinate the formulation and implementation of Development Projects<br><br>


                            <h5>3.Procurement Unit</h5>
                            -Manage all procurement and disposal by tender activities except adjudication and award of
                            contract<br>

                            -Advise on procurement and disposal activities<br>
                            -Implement the decisions of the tender board<br><br>


                            <h5>4. Internal Audit Unit</h5>
                            -Prepare, Implement and report annual audit work plans and programs<br>

                            -Advice on risk management<br>

                            -Advice on internal control systems<br>

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
