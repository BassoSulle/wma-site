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
                                <li class="breadcrumb-item list-inline-item active">Speeches</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Speeches</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><h4>Speeches Name</h4></th>
                                        <th><h4>Date Added</h4></th>
                                        <th><h4>Downloads</h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Budget Speech Ministry of Industry, Trade and Investment 2017/2018</td>
                                        <td>August 11, 2017</td>
                                        <td><a href="https://www.wma.go.tz/uploads/documents/en/1502453420-HOTUBA%20VIWANDA.pdf" target="_blank">Downloads</a></td>
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
