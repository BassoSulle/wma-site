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
                                <li class="breadcrumb-item list-inline-item active">Events</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 bg-white py-3 page-content">
                        <h4 class="mb-3">Events</h4>
                        <div class="row">
                            @foreach ($events as $item)
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="event-thumbnail pr-2">
                                                    <img src="{{ asset('storage/' . $item->image) }}"
                                                        style="width: 150px; height: 90px; object-fit: cover;"
                                                        alt="Thumbnail" class="img-thumbnail">
                                                </div>
                                                <div>
                                                    <p class="text-justify mb-2">
                                                    <h6 class="article-h2 text-uppercase">{{ $item->title }}</h6>
                                                    </p>
                                                    <p><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                                        {{ $item->created_at->format('M j, Y') }}</p>
                                                    <p>{{ Str::limit($item->description, 30) }}
                                                    </p>
                                                    <a href="{{ route('event_details', ['language' => $current_language, 'slug' => $item->slug]) }}"
                                                        style="width: 100px; background-color: orange; color: white; text-align: center; display: inline-block; padding: 10px; border-radius: 5px;">Read
                                                        more</a>
                                                </div>
                                            </div>
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
