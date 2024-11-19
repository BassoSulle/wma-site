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
                                <li class="breadcrumb-item list-inline-item active">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 bg-white py-3 page-content">
                        <h4 class="mb-3">News</h4>
                        <div class="row">
                            @foreach ($news as $item)
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 d-flex align-items-center mb-3">
                                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                                        alt="News Image">
                                                </div>
                                                <div class="col-md-12 d-flex flex-column justify-content-center">
                                                    <p><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                                        {{ $item->created_at->format('M j, Y') }}</p>
                                                    <h6 class="article-title">{{ $item->title }}</h6>
                                                    <p>{{ Str::limit($item->description, 65) }}</p>
                                                    <a href="{{ route('new_details', ['language' => $current_language, 'slug' => $item->slug]) }}"
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
