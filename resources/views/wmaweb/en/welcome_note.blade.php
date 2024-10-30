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
                                <li class="breadcrumb-item list-inline-item active">Utaratibu wa Uombaji wa Leseni</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4 class="article-h2">Welcome note</h4>
                        <div class="col-12 px-0 mb-2 mt-2">

                            <div class="news-title">
                                <h4 >Executive Officer Massage</h4>
                            </div>
                            <div class="">
                                <ul class="list-unstyled list-inline mb-1">


                            <div class="news-content mt-3">
                              <p class="card-text" class="text-justify;"
                              style="letter-spacing: 0.05em; line-height: 1.5; text-align: justify; text-align-last: left;">
                              The Weights and Measures Agency is a Government Agency under the Ministry of Industry and Trade.
                              It was established on 17.05.2002 by Government Establishment Order No. 194 through the Act for the Establishment of Government Agencies,
                              Chapter 245. Before its establishment, its responsibilities were carried out under a department within the Ministry of Industry and Trade.
                              The main objective of establishing the Weights and Measures Agency is to improve the services that were being provided by the Weights Department
                               under the Ministry of Industry and Trade and to reduce operational costs from the central government fund.
                              </br>
                          </br>
                              To achieve this goal, the Weights and Measures Agency carries out its duties in accordance with the Weights and Measures Act,
                               Chapter No. 340. The responsibilities executed under this law include verification and inspection of measurements, providing
                               technical advice to manufacturers of measuring instruments in the country, approving various types of measuring instruments before they are imported into the country,
                               and inspecting packaged products produced in our local industries and those imported from abroad.

                              <br>

                              In executing its responsibilities, the Weights and Measures Agency contributes to building a modern,
                              inclusive, and competitive economy. The main foundation for achieving this is to have industries that effectively
                              utilize verified instruments that meet international requirements (Traceability to International Standards),
                              which enhance productivity, efficiency, and accuracy of measurements of products produced in these industries, making them competitive in both domestic and international markets.
                              The result is an acceleration of economic growth and national income.
                              <br>
                              In carrying out its responsibilities, the Weights and Measures Agency has continued to contribute to
                              stimulating the development of economic and social sectors in the country, promoting the production of goods that adhere to accurate measurements, continuing to contribute to the central government fund,
                               and will continue to venture into new areas as needed to ensure that citizens receive services and
                               products with accurate measurements.

                          </p>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-md-3 navigation-column">
                @include('wmaweb.en.announcments_and_events')
            </div>
        </div>
    </div>
@endsection
