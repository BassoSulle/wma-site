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
                                <li class="breadcrumb-item list-inline-item active">Utaratibu wa Uombaji wa Leseni
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Utaratibu wa Uombaji wa Leseni</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <h5 class="mt-2">Requirements/Conditions:</h5>
                            <p>To process your license application we will need the following Documents:</p>
                            <ol>
                                <li>
                                    <ul>
                                        <li>
                                            For a new license;
                                            <ul>
                                                <li>License application letter</li>
                                            </ul>
                                        </li>
                                        <li>
                                            For license re-new
                                            <ul>
                                                <li>A dully filled application form approved by the relevant Regional
                                                    office.</li>
                                                <li>Applicant's office and equipment inspection form.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>Copy of receipt of application payment</li>
                                <li>Valid business license</li>
                                <li>Tax Payer Identification Number (TIN)</li>
                                <li>Certificate of tax clearance</li>
                                <li>Certificate of registration/incorporation from BRELA</li>
                                <li>Identity Card (Nation ID/Driver's License/Voter ID)</li>
                                <li>Working Permit for non-citizen of Tanzania</li>
                            </ol>
                            <h5 style="margin-top: 30px;">License Categories.</h5>
                            <table class="table" border="1" style="margin-bottom: 30px;">
                                <tbody>
                                    <tr>
                                        <td style="width: 134.75pt; border-width: 1pt; border-color: windowtext;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                Class<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-left: none;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                Descriptions<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                A<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                To install, overhaul, service or repair all types of
                                                weighing instruments throughout the Mainland Tanzania.<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 134pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                B<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                To install, overhaul, service or repair not more
                                                than six and not less than four types of Measuring Instrument or Systems
                                                throughout the Mainland Tanzania.<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                C<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                To install, overhaul, service or repair not more
                                                than three types of weighing instruments throughout the Mainland Tanzania.
                                                <o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                D<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 115%">
                                                To erect, install, overhaul, adjust, service or
                                                repair measuring of Liquid Measuring Pumps and Flow Meters throughout the
                                                Mainland Tanzania.<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style="mso-yfti-irow:5;height:18.85pt">
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; height: 18.85pt;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                E<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; height: 18.85pt;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                To manufacture the weighing/measuring instruments or
                                                systems throughout the Mainland Tanzania.<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style="mso-yfti-irow:6;height:13.0pt">
                                        <td width="623" colspan="2" valign="top"
                                            style="width: 467.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; height: 13pt;">
                                            <p class="MsoNormal" align="center"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;
                                 text-align:center;line-height:normal">
                                                Other Licenses<o:p></o:p>
                                            </p>

                                        </td>
                                    </tr>
                                    <tr style="mso-yfti-irow:7;height:34.6pt">
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; height: 34.6pt;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                Tank calibrators<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; height: 34.6pt;">
                                            <p class="MsoBodyText" style="line-height:115%;mso-pagination:none">To
                                                Calibrate
                                                Underground Storage
                                                Tanks throughout the Mainland Tanzania<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style="mso-yfti-irow:8;height:32.35pt">
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; height: 32.35pt;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                Gas meters calibrators<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; height: 32.35pt;">
                                            <p class="MsoBodyText" style="line-height:115%;mso-pagination:none">To
                                                Calibrate Gas
                                                flow Meters throughout the Mainland Tanzania<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style="mso-yfti-irow:9;height:34.15pt">
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; height: 34.15pt;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                Pressures gauges &amp;
                                                valves calibrators<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; height: 34.15pt;">
                                            <p class="MsoBodyText" style="line-height:115%;mso-pagination:none">To
                                                calibrate
                                                Pressures gauges &amp; valves throughout the Mainland Tanzania<o:p></o:p>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style="mso-yfti-irow:10;mso-yfti-lastrow:yes;height:34.15pt">
                                        <td
                                            style="width: 134.75pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; height: 34.15pt;">
                                            <p class="MsoNormal"
                                                style="margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                                 normal">
                                                Others<o:p></o:p>
                                            </p>
                                        </td>
                                        <td width="444" valign="top"
                                            style="width: 332pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; height: 34.15pt;">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
