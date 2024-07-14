@extends('wmaweb.sw.base_layout')

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
                                <li class="breadcrumb-item list-inline-item active">Tunu za Wakala</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Tunu za Wakala</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="core values">
                            <h5 style="font-weight:bold">Utendaji wenye matokeo</h5>
                            Ø Wakala inajali utendaji wa matokeo zaidi.<br><br>

                            <h5 style="font-weight:bold">Timu ya pamoja</h5>
                            Ø Wafanyakazi wa Wakala wanatekeleza majukumu yao kwa pamoja, yaani kitimu.<br><br>

                            <h5 style="font-weight:bold">Weledi</h5>
                            Ø Wafanyakazi wa Wakala wanatumia taaluma zao mahiri na ujuzi wao kuhakikisha wanafikia
                            mafanikio ya Wakala.<br><br>

                            <h5 style="font-weight:bold">Kufikia matarajio ya mteja</h5>
                            Ø Wakala mara zote inataka kufikia matarajio ya mteja katika huduma wanazotoa.<br><br>

                            <h5 style="font-weight:bold">Uwazi</h5>
                            Ø Mara zote Wakala inatekeleza majukumu yake kwa uwazi kwa wateja wake wote wa ndani na
                            nje.<br><br>

                            <h5 style="font-weight:bold">Uwajibikaji</h5>
                            Ø Wakala na wafanyakazi wake wanawajibu wa kutekeleza majukumu yake kikamilifu kufikia mafanikio
                            ya malengo yake.<br><br>
                            </p>

                        </div>
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.sw.announcments_and_events')
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /contents -->
@endsection
