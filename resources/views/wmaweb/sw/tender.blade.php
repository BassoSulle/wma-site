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
                                <li class="breadcrumb-item list-inline-item active">Zabuni</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Zabuni</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>
                                                Kichwa cha Zabuni</h4>
                                        </th>
                                        <th>
                                            <h4>Tarehe ya Kutolewa</h4>
                                        </th>
                                        <th>
                                            <h4>Tarehe ya Mwisho</h4>
                                        </th>

                                        <th>
                                            <h4>Pakua</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tender as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->start_date }}</td>
                                            <td>{{ $item->end_date }}</td>
                                            <td><a href="{{ asset('storage/' . $item->file) }}"
                                                    download="{{ $item->title . '_' . basename($item->file) }}"
                                                    target="_blank">Pakua</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Hakuna Zabuni yeyote..!</td>

                                        </tr>
                                    @endforelse

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
