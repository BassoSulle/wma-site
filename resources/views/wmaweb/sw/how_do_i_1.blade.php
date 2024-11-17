@extends('wmaweb.sw.base_layout')

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
                                <li class="breadcrumb-item list-inline-item active">Utaratibu wa Uombaji wa Leseni</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Utaratibu wa Uombaji wa Leseni</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                                <h5>Requirements/Conditions</h5>
                                <ul>
                                    <li>License application letter for new licenses or filled application forms for renewals.</li>
                                    <li>Copy of receipt of application payment.</li>
                                    <li>Valid business license.</li>
                                    <li>Tax Payer Identification Number (TIN).</li>
                                    <li>Certificate of tax clearance.</li>
                                    <li>Certificate of registration/incorporation from BRELA.</li>
                                    <li>Identity Card (National ID/Driver's License/Voter ID).</li>
                                    <li>Working Permit for non-citizens of Tanzania.</li>
                                </ul>

                                <h5>License Categories</h5>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>To install, overhaul, service or repair all types of weighing instruments throughout the Mainland Tanzania.</td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>To install, overhaul, service or repair not more than six and not less than four types of measuring instruments or systems throughout Mainland Tanzania.</td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>To install, overhaul, service or repair not more than three types of weighing instruments throughout Mainland Tanzania.</td>
                                        </tr>
                                        <tr>
                                            <td>D</td>
                                            <td>To service liquid measuring pumps and flow meters throughout Mainland Tanzania.</td>
                                        </tr>
                                        <tr>
                                            <td>E</td>
                                            <td>To manufacture weighing/measuring instruments or systems throughout Mainland Tanzania.</td>
                                        </tr>
                                        <tr>
                                            <td>Tank Calibrators</td>
                                            <td>To calibrate underground storage tanks throughout Mainland Tanzania.</td>
                                        </tr>
                                        <tr>
                                            <td>Gas Meters Calibrators</td>
                                            <td>To calibrate gas flow meters throughout Mainland Tanzania.</td>
                                        </tr>
                                        <tr>
                                            <td>Pressures gauges & valves calibrators</td>
                                            <td>To calibrate Pressures gauges & valves throughout the Mainland Tanzania</td>
                                        </tr>
                                        <tr>
                                            <td>Others</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

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
@endsection
