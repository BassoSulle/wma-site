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
                                <li class="breadcrumb-item ">
                                    <a href="{{ route('home', ['language' => $current_language]) }}"><span
                                            class="fas fa-home"></span></a>
                                </li>
                                <li class="breadcrumb-item list-inline-item active">Weight and Measure Act</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>WMA Act</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>Publication Name</h4>
                                        </th>
                                        <th>
                                            <h4>Published On</h4>
                                        </th>
                                        <th>
                                            <h4>Downloads</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>The Written Laws (Miscellaneous Amendments) (No. 5) Act, 2019 (1)</td>
                                        <td>07/11/2019</td>
                                        <td><a href="https://www.wma.go.tz/uploads/documents/en/1573108657-The%20Written%20Laws%20(Miscellaneous%20Amendments)%20(No.%205)%20Act,%202019%20(1).pdf"
                                                target="_blank">Downloads</a></td>
                                    </tr>
                                    <tr>
                                        <td>(MISCELLANEOUS AMENDMENTS) ACT NO. 3 OF 2016</td>
                                        <td>30/09/2019</td>
                                        <td><a href="https://www.wma.go.tz/uploads/documents/en/1569833715-(MISCELLANEOUS%20AMENDMENTS)%20ACT%20NO.%203%20OF%202016_compressed%20(1).pdf "
                                                target="_blank">Downloads</a></td>
                                    </tr>
                                    <tr>
                                        <td>THE WEIGHTS AND MEASURES ACT, CHAPTER 340, PRINCIPAL LEGISLATION</td>
                                        <td>30/07/2019</td>
                                        <td><a href="https://www.wma.go.tz/uploads/documents/en/1556091018-THE%20WEIGHTS%20AND%20MEASURES%20ACT,%20CHAPTER%20340,%20PRINCIPAL%20LEGISLATION.pdf"
                                                target="_blank">Downloads</a></td>
                                    </tr>
                                    <tr>
                                        <td>THE WEIGHTS AND MEASURES ACT (AMENDMENT) ORDER GN NO. 725 of 2018</td>
                                        <td>12/04/2019</td>
                                        <td><a href="https://www.wma.go.tz/uploads/documents/en/1555070590-ORDER%20GN%20NO.%20725%20of%202018%20lumbesa.pdf"
                                                target="_blank">Downloads</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.en.announcments_and_events')
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- /contents -->
@endsection
