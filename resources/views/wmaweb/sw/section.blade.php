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
                                <li class="breadcrumb-item list-inline-item active">Sections</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Sections</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                            <h4>Weights and Measures Agency have six sections:-</h4><br>


                            <h5>1.Marketing, Information, Education and Communication Section</h5>
                            - Inform the Public on activities and services offered by WMA<br>

                            - Promote WMA functions, activities, programs and policies<br>

                            -Handle complaints issues of the Agency><br><br>


                            <h5>2. Administration and Human Resource Section</h5>
                            -Provide administrative and logistical support to performance management system and business
                            process improvement<br>
                            - Provide office accomodation, estate development and maintanance services<br>
                            -Promote staff development and welfare services<br><br>


                            <h5>3.Finance and Accounts Section</h5>
                            - Manage implementation of accounting policies and principles of the Agency<br>

                            - Ensure proper payroll management<br>

                            - Manage revenue and expenditure accounting<br><br>


                            <h5>4. Calibration Services Section</h5>
                            -Provide metrological expertise to stakeholders regarding calibration of volume measures<br>
                            -Facilitate issuance of authority to private practitioners to calibrate static measures<br>
                            -Prepare and review manuals and guidlines for calibration of static measurement<br><br>


                            <h5>5. Standard and Verification Section</h5>
                            - Ensure verification of standards are done in accordance with metrological requirements and
                            issue certificates<br>
                            -Provide metrological expertise to local manufactures, importers, repairers, sellers and buyers
                            of measuring systems and instruments<br>
                            -Maintain legal metrology laboratory and facilities<br><br>

                            <h5>5. Surveillance Section</h5>
                            - Monitor the performance of metrological inspections on pre-packed goods<br>
                            -Facilitate the issuance and renewalof licenses to practitioners of legal metrology<br>
                            - Supervise, Monitor and conduct surprise inspections, verifications and investigations<br>
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
