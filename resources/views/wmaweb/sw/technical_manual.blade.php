@extends('wmaweb.sw.base_layout')

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
                                <li class="breadcrumb-item list-inline-item active">Miongozo ya Kiufundi</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Miongozo ya Kiufundi</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>
                                                Jina la Chapisho</h4>
                                        </th>
                                        <th>
                                            <h4>Tarehe ya Kutolewa</h4>
                                        </th>
                                        <th>
                                            <h4>Pakua</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>VERIFICATION FOR FUEL DISPENSING PUMPS</td>
                                        <td>07/11/2019</td>
                                        <td><a href="#" target="_blank">Pakua</a></td>
                                    </tr>
                                    <tr>
                                        <td>VERIFICATION OF CAPACITY MEASURES</td>
                                        <td>16/09/2019</td>
                                        <td><a href="#" target="_blank">Pakua</a></td>
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
    <!-- /contents -->
@endsection
