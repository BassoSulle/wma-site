@extends('wmaweb.en.base_layout')

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
                                <li class="breadcrumb-item list-inline-item active">All Announcements</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 bg-white py-3 page-content">
                        <h4>All announcements</h4>


                        <div class="row">
                            @foreach($announcements as $item)
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        {{-- <img src="{{ $announcement_details->image }}" class="card-img-top" alt="Event Image"> --}}
                                        <div class="card-body">
                                            {{-- <span class="badge bg-primary">{{ $event->category }}</span> --}}
                                            <h5 class="card-title">{{ $item->title ?? 'No title available' }}</h5>
                                            <a href="" class="btn btn-primary">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
