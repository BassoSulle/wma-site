@extends('wmaweb.en.base_layout')

@section('content')
    <div class="container">
        <div class="col-12 special-page">
            <div class="col-12 py-4 px-0">
                <div class="row">
                    <div class="col-12 px-xs-0 px-1">
                        <nav aria-label="breadcrumb" class="mb-0">
                            <ol class="breadcrumb px-0">
                                <li class="breadcrumb-item ">
                                    <a href="{{ route('home', ['language' => $current_language]) }}"><span
                                            class="fas fa-home"></span></a>
                                </li>
                                <li class="breadcrumb-item list-inline-item active">Photo Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Photo Gallery</h4>
                        <div class="row mt-4">
                            @forelse ($galleries as $item)
                                <div class="col-md-4 pb-3 mb-3">
                                    @php
                                        if ($item->photos->count() > 0) {
                                            $latestPhoto = null;

                                            foreach ($item->photos as $photo) {
                                                $latestPhoto = $photo;
                                            }

                                            $image = $latestPhoto->image;

                                            $date = $latestPhoto->updated_at->format('M d, Y');
                                        } else {
                                            echo 'No photos available.';
                                        }
                                    @endphp
                                    <div class="col-12 bg-light px-xs-2 p-3 image-wrapper">
                                        <div class="strip" style="cursor: pointer;">
                                            <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image"
                                                style="width: 260px; height: 240px; object-fit: cover">
                                        </div>
                                    </div>
                                    <div class="col-12 bg-light px-xs-2 p-3">
                                        <div>
                                            <p class="text-justify mb-2">
                                                <b>
                                                    <h6 class="article-h2 text-left">{{ $item->title }}</h6>
                                                </b>
                                                <small>(Picha {{ $item->photos->count() }})</small>
                                                <i class="fa fa-calendar blue-icon ml-2" style="color: #006f8b;"></i>
                                                {{ $date }}
                                            </p>
                                            <style>
                                                .view-btn {
                                                    background-color: #F89629;
                                                }

                                                .view-btn:hover {
                                                    background-color: #e68804;
                                                }
                                            </style>
                                            <span>
                                                <button class="btn btn-block view-btn" data-toggle="modal"
                                                    data-target="#exampleModal">View pictures</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-uppercase" style="color: #D79E12;"
                                                    id="exampleModalLabel">
                                                    {{ $item->title }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body px-1 py-1">
                                                <div>
                                                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade"
                                                        data-ride="carousel" data-interval="10000">
                                                        <div class="carousel-inner">
                                                            @foreach ($item->photos as $key => $photo)
                                                                <div
                                                                    class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                    <img class="d-block w-100"
                                                                        src="{{ asset('storage/' . $photo->image) }}">
                                                                    <div class="mask flex-center">
                                                                        <div class="container">
                                                                            <div class="row align-items-center">
                                                                                <div
                                                                                    class="col-md-12 order-md-1 mt-2 order-2 text-center">
                                                                                    <p class="text-primary"
                                                                                        style="font-size: 16px;">
                                                                                        {{ $photo->en_caption }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                            role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                            role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-12 pb-3 my-3 text-center align-items-center justify-content-center">
                                    <p>No Images found.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.en.announcments_and_events')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
