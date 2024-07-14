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
                                {{-- <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO COMSATS</li> --}}
                                <li class="breadcrumb-item list-inline-item active">Majukumu ya Wakala wa Vipimo</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Majukumu ya Wakala wa Vipimo</h4>

                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="vision and mission">
                            <h5>Wakala wa Vipimo ana majukumu yafuatayo:</h5>
                            1. Kumlinda mlaji katika Sekta ya Biashara, Usalama, Mazingira na Afya kupitia matumizi ya
                            vipimo sahihi;<br>

                            2. Kuilinda jamii kuepukana na madhara yatokanayo na matumizi mabaya ya vipimo katika Sekta ya
                            Biashara, Usalama, Mazingira na Afya;<br>

                            3. Kusimamia na kutoa ushauri wa kitaalamu kwa wanaojihusisha na utengenezaji, uundaji, na
                            uingizaji wa vipimo mbalimbali katika Biashara, Usalama, Mazingira na Afya;<br>

                            4. Kuwa kiungo kati ya Taifa letu na taasisi za kikanda na Kimataifa katika masuala ya Vipimo
                            (Legal Metrology);<br>

                            5. Kuhakikisha vifaa vyote vitumikavyo nchini kama standards za vipimo vinaulinganisho sahihi na
                            ule wa Kimataifa;<br>

                            6. Kukagua na kuhakiki bidhaa zilizofungashwa (Net quantity & labeling);<br>

                            7. Give effect to the decisions and recommendations of the OIML Council and Committee with
                            regard to legal metrology;

                            8. Kutoaelimu na ushauri wa kitaalamu kuhusu masuala ya vipimo kwa wadau.
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

    </div>
    <!-- /contents -->
@endsection
