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
                                <li class="breadcrumb-item list-inline-item active">{{$new_details->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>{{$new_details->title}}</h4>
                        <div style="width: 90%; height: 400px; overflow: hidden;"> <!-- Adjust height as needed -->
                            <img src="{{ asset('storage/'. $new_details->image) }}"
                                 style="width: 100%; height: 100%; object-fit: cover;"
                                 alt="" class="img-fluid">
                        </div>
                       <br>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                                {!! nl2br(e($new_details->description)) !!}
                            </p>

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
