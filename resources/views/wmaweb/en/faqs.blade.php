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
                                <li class="breadcrumb-item list-inline-item active">Maswali Yaulizwayo Mara kwa Mara
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <style>
                        .faq dt {
                            position: relative;
                            font: 700 16px Georgia;
                            padding: 4px 0 10px;
                        }

                        .faq dd,
                        .faq dt {
                            padding-left: 50px !important;
                        }

                        .faq dd {
                            margin: 0 0 50px;
                            font-size: 16px;
                        }

                        .faq dd,
                        .faq dt {
                            padding-left: 50px !important;
                        }

                        dd {
                            margin-left: 0;
                        }

                        address,
                        blockquote .small,
                        blockquote footer,
                        blockquote small,
                        dd,
                        dt,
                        pre {
                            line-height: 1.42857;
                        }

                        dt,
                        kbd kbd,
                        label {
                            font-weight: 700;
                        }

                        .faq {
                            counter-reset: a;
                            /* Reset the counter */
                        }

                        .faq dt:before {
                            content: counter(a);
                            counter-increment: a;
                            position: absolute;
                            left: 0;
                            top: 0;
                            font: 700 50px / 1 Verdana, Geneva, sans-serif;
                        }
                    </style>
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Frequently Asked Questions</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <div class="faq">
                                <dl>
                                    <dt>What are the penalties for breakage of seal/ fraudulent us of weight or measure</dt>
                                    <dd>Ans: As per Section 45 of the weights and measures act, 2002 whoever removes or
                                        tampers
                                        with the seal/ stamps shall be punished.</dd>
                                    <dt>Is it mandatory to get verification stamp on tax meters?</dt>
                                    <dd>Ans: Yes, it is mandatory.</dd>
                                    <dt>Can a person sell or use stamped weights and measures?</dt>
                                    <dd>Ans: No, weight or measure shall be sold or offered, exposed, or possessed for sale
                                        or
                                        used or kept for use in any transaction or protection unless it has been verified
                                        and
                                        stamped by an inspector of weights and measures.</dd>
                                    <dt>Who is the competent authority to register any person who intents to import or
                                        export
                                        any weights and measures</dt>
                                    <dd>
                                        <p>Ans: Any person who intend to import any Weights and Measures needs to notify WMA
                                            in
                                            order for the weights and measures to be checked and stamped.</p>
                                    </dd>
                                    <dt>Is there any license to manufacture, sale or repair weights and measures</dt>
                                    <dd>Ans: Yes, the commissioner for Weights and Measures issues license to the
                                        manufacturer,
                                        dealer and repairer of Weights and Measures. The applicant can submit his
                                        application
                                        for grant of license to the commissioner of weights and measures. A license issued
                                        or
                                        renewal under this Act is not saleable or otherwise transferable. Regulation 177,
                                        made
                                        under section 54(1) of the weights and measures Act states that:-No person shall
                                        make,
                                        manufacture, repair, sell any weight or measure unless he holds a valid license. The
                                        violation is punishable under Sec 45 of the Act.</dd>
                                    <dt>What is the penalty if a person gives short/less deliveries</dt>
                                    <dd>
                                        <p>Ans: Any person who gives a person short/less deliveries shall be guilty of an
                                            offence and be charged in the court of law. (sect. 41) </p>
                                    </dd>
                                    <dt>What is the penalty, if a person fails to get the weights or measure, verified in
                                        due
                                        time</dt>
                                    <dd>Ans:Whoever being required to present any weight or measure for verification or
                                        re-verification, omits or fails without any reasonable cause to do so, shall be
                                        guilty
                                        of an offence and be charged by the court of law. (Sec.19)</dd>
                                    <dt>How is stamping done in Weights and Measures</dt>
                                    <dd>
                                        <p>Ans: On getting a request from the user or his agent the inspector for weights
                                            and
                                            measures checks every weights and measures for accuracy, and if found
                                            satisfactory,
                                            the weights and measures is stamped by a special seal indicating the year in
                                            which
                                            it is verified. If found unsatisfactory, a rejection mark is stamped and/or a
                                            rejection note is issued</p>
                                    </dd>
                                    <dt>What is the necessity of imposing the Weights and Measures Laws</dt>
                                    <dd>
                                        <p>Ans:To ensure uniform enforcement of Standards and connected matters in Weights
                                            and
                                            Measures throughout the country</p>
                                    </dd>
                                </dl>
                                <ul class="pagination">
                                    <li> </li>
                                </ul>
                            </div>
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
