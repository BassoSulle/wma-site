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
                                <li class="breadcrumb-item list-inline-item active">Application form for tank calibrators
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Application form for tank calibrators</h4>

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
                                0617937344 <tbody>
                                    <tr>
                                        <td>Application form for tank calibrators </td>
                                        <td>06/09/2017</td>
                                        <td><a href="https://www.wma.go.tz/uploads/documents/en/1504690151-Application%20form%20for%20Tank%20Calibrators.doc"
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

    </div>
    <!-- /contents -->
@endsection
