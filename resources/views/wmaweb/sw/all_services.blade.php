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
                                <li class="breadcrumb-item list-inline-item active">Huduma</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 bg-white py-3 page-content">
                        <h4 class="mb-3">Huduma</h4>
                        <div class="row">
                            @foreach ($services as $item)
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="service-item row">
                                                <div class="service-icon col-md-3">
                                                    <img src="{{ asset('storage/' . $item->icon) }}" alt=""
                                                        style="margin-bottom: 10px; width: 90px; height: 90px; object-fit: cover;">
                                                </div>
                                                <div class="col-md-6 ml-2">
                                                    <div class="service-title mb-3">{{ $item->name }}</div>
                                                    <div class="service-btn-wrapper">
                                                        <a href="{{ route('service_details', ['language' => $current_language, 'slug' => $item->slug]) }}"
                                                            style="width: 100px; background-color: orange; color: white; text-align: center; display: inline-block; padding: 10px; border-radius: 5px;">Soma
                                                            zaidi</a>
                                                    </div>
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
