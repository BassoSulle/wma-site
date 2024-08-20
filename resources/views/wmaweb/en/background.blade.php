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
                                <li class="breadcrumb-item list-inline-item active">Background</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Background</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="about_hub">

                                The history of Weights and Measures is traced back since the early human civilisation.
                                Measurement System is undoubtedly one of man’s greatest and most important inventions that
                                cannot be left aside in the history of evolution of civilisation. Every human being on our
                                planet is affected by measurements in one way or another. Imagine, from the moment we are
                                born and throughout our daily lives, the act of weighing or measuring is an important and
                                often vital part of our existence. Our bodies, the food we eat and all the products we use
                                as an integral part of modern living have all been weighed and measured at some stage or
                                another in their development. It is almost impossible to describe anything without referring
                                to weights and measures. Therefore, weighing or measuring is natural and vital part of our
                                everyday life.<br><br>
                                Economies in the world depend on reliable measurements that are trusted and accepted
                                internationally. This facilitates trade and reduces transaction costs.<br><br>
                                The use of weights and measures in the country is believed to be introduced even before the
                                First World War, during the German era. While the German introduced the Metric System of
                                measurement, the British, introduced the Imperial System of measurement. The execution of
                                weights and measures duties was done by Weights and Measures Inspectors under the control of
                                the Commissioner of Police according to Cap.221 of the laws. It was the duty of Governor to
                                procure the Imperial Weights and Measures Standards and to appoint and revoke the
                                appointments of the Weights and Measures Inspectors.
                                <br>
                                <br>
                                In 1960, the Weights and Measures Ordinance, Cap.221 was repealed by enactment of the
                                Weights and Measures Ordinance, Cap.426 of 1960 which placed the role of the Weights and
                                Measures under the Ministry of Commerce and Industry. According to the Weights and Measures
                                Ordinance, Cap.426, authority to procure standards was still under the Governor although
                                powers to appoint heads of Weights and Measures Bureau, which was then a unit in the
                                department of Commerce in the Ministry of Commerce and Industry, was vested in the Minister.
                                It was from this time when the Weights and Measures Unit became known as “The National
                                Bureau of Standards” in the Ministry of Commerce and Industry until 1964 when it was put
                                under the Ministry of Commerce and Co-operatives.
                                <br>
                                <br>
                                The Weights and Measures Unit was again moved to the Ministry of Commerce and Industry in
                                1967. In 1968, by the act of parliament No. 46 Tanzania along with the rest of East African
                                community member states adopted the use of Metric System. In 1976, Weights and Measures Unit
                                was placed under the Ministry of Trade until 1984, before being moved to the Ministry of
                                Industry and Trade in 1985 until 2005.Thereafter as an Agency was transferred to the
                                Ministry of Industry, Trade and Marketing and then moved back to the Ministry of Industry
                                and Trade in 2011 up to date.
                                <br>
                                <br>
                                The establishment of the Tanzania Bureau of Standards in 1975, made the name of the unit to
                                be changed from “The National Bureau of Standards” to “The Weights and Measures Bureau”. In
                                1982, the Parliament enacted a law known as the “Weights and Measures Act No.20 of 1982”.
                                The new law introduced the International System of Measurements repealing the Weights and
                                Measures Ordinance of 1960. However, the Regulations made under the Ordinance were retained.
                                The new Act vested the appointment of the head of the Weights and Measures, the
                                Commissioner, with the President while the Minister appointed the Assistant Commissioners
                                and Assizers. The Minister also procured copies of the National Standards. The National
                                Standards remain the prototype copies of the International Standards of the kilogram and
                                meter.
                                <br>
                                <br>
                                Throughout its history the Bureau has gone through numerous process of change to respond to
                                a dynamic environment. In 2002 the Bureau was transformed into an Agency under the Executive
                                Agency establishment order No. 194 in pursuance of the Executive Agency Act No. 30 of 1997.
                                The move was part of the Public Sector Reform Programme (PSRP) which was aimed at improving
                                effectiveness and efficiency of public service delivery.
                                <br>
                                <br>The Weights and Measures Bureau became an Executive Agency and borne a new title the
                                “Weights and Measures Agency”, (WMA). The Agency performs its functions in pursuance of the
                                Weights and Measures Act Cap.340 (R.E. 2002) together with its cognate Regulations. In its
                                activities, WMA strives to meet the state and public expectations in protecting consumers
                                and providing a level playing field for business competition.
                                <br>
                                <br>
                            </p>

                        </div>
                    </div>

                    {{-- Announcement and Event section --}}

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
