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
                                <li class="breadcrumb-item list-inline-item active">Mandate and Roles</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Mandate and roles</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                            <h5>MANDATE</h5>
                            The Mandate of WMA is to provide protection to consumers in relation to legal metrological
                            control which
                            includes legal control of measuring instruments,metrological supervision and metrological
                            expertise in trade,
                            health, safety and environment.<br><br><br>

                            <h5>ROLES</h5>
                            The Roles of WMA as stipulated under the Weights and Measures Act (Cap.340) and the Executive
                            Agencies Act (Cap.245) are to:

                            1. Protect consumers in trade, safety, health and environment in relation to legal
                            metrology;<br>

                            2. Protect society from the consequences of false measurements in public and private
                            transactions;<br>

                            3. Approve (or ensure approval by another designated institutions) measuring instruments to be
                            used for a public or private transaction in

                            trade, safety, health and environment sectors;<br>

                            4. Control the use of measuring instruments in public and private transactions;<br>

                            5. Control pre-packaging of products;<br>

                            6. Liaise with regional and international organizations with similar objectives;<br>

                            7. Give effect to the decisions and recommendations of the OIML Council and Committee with
                            regard to legal metrology;<br>

                            8. Provide information on Legal Metrology in general and<br>

                            9. Ensure that legal metrology measurement standards are traceable to national and 9.
                            International measurement standards.<br>

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
