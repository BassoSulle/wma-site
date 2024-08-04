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
                                <li class="breadcrumb-item list-inline-item active">WMA Regulations</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>WMA Regulations</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>Publication Name</h4>
                                        </th>
                                        <th>
                                            <h4>Date Added</h4>
                                        </th>
                                        <th>
                                            <h4>Download</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>WEIGHTS AND MEASURES GENERAL REGULATIONS, GN 288 OF 2019 (2)</td>
                                        <td>07/11/2019</td>
                                        <td><a href="#" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <td>WEIGHTS AND MEASURES GENERAL REGULATIONS, GN 288 OF 2019</td>
                                        <td>16/09/2019</td>
                                        <td><a href="#" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <td>(SAND AND OTHER BALLAST) REGULATIONS-2013</td>
                                        <td>21/12/2016</td>
                                        <td><a href="#" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <td>(SALE OF LIQUEFIED PETROLEUM GAS) REGULATIONS, 2013</td>
                                        <td>21/12/2016</td>
                                        <td><a href="#" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <td>(METROLOGICAL CONTROL OF WATER METERS) REGULATIONS, 2014</td>
                                        <td>21/12/2016</td>
                                        <td><a href="#" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <td>(CREDIT AND DEBT CONTROL) REGULATIONS, 2014</td>
                                        <td>21/12/2016</td>
                                        <td><a href="#" target="_blank">Download</a></td>
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

    </div>
    <!-- /contents -->
@endsection
