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
                                <li class="breadcrumb-item list-inline-item active">Request for a Pattern Approval</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>MAOMBI YA KUIDHINISHA VIPIMO VIPYA</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                                <h5>Requirements/Conditions</h5>
                                <p>To process your approval, we will need the following documents:</p>
                                <ul>
                                    <li>Pattern Approval from the Country of Origin</li>
                                    <li>Operation Manual of the Device, including maintenance, installation, and testing</li>
                                    <li>Information on means of sealing where not obvious and instructions on sealing/removal of seals</li>
                                    <li>Certificate of Incorporation</li>
                                </ul>

                                <p>Remember: During the pattern approval process, we examine the design of a measuring instrument, and we shall perform a physical inspection of the device onsite or in the lab.</p>

                                <h5>Process of Application</h5>
                                <p>
                                    <strong>APPLY</strong> (Fill the Application Form and Submit) >
                                    <strong>REVIEW</strong> (Review of Submission) >
                                    <strong>INSPECTION</strong> (Physical Inspection of Devices) >
                                    <strong>PAYMENT</strong> (Pay the required fee) >
                                    <strong>APPROVAL</strong> (Issuance of Certificate)
                                </p>
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
