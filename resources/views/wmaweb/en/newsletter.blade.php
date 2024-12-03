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
                                <li class="breadcrumb-item list-inline-item active">News Letter </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>News Letter </h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h4>Title</h4>
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
                                    @forelse ($news_letters as $item)
                                        <tr>
                                            <td>{{ $item->title }} </td>
                                            <td>{{ $item->created_at->format('M d, Y') }}</td>
                                            <td><a href="{{ asset('storage/news_letters/' . $current_language . '/' . $item->file) }}"
                                                    download="{{ $item->title }}" target="_blank">Download</a></td>
                                        </tr>
                                    @empty
                                        <tr style="background-color: rgb(239, 239, 122);">
                                            <td colspan="3" class="text-center">No News letter available</td>
                                        </tr>
                                    @endforelse
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
