@extends('wmaweb.sw.base_layout')
<!-- /HEADER -->

<style>
    .regional-office-select {
        display: inline-block;
    }

    .regional-office-select select {
        width: auto;
        min-width: 100%;
    }

    .office-info {
        display: none;
    }
</style>

<!-- contents -->
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
                                <li class="breadcrumb-item list-inline-item active">Ofisi za Mikoa</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <div class="form-group">
                            <div class="regional-office-select">
                                <h4><label for="regionalOffice">Chagua ofisi ya Mkoa:</label></h4>
                                <select class="form-control" id="regionalOffice" name="regionalOffice">
                                    <option selected>Select office</option>
                                    <option value="arusha">Arusha</option>
                                    <option value="dodoma">Dodoma</option>
                                    <option value="ilala">Ilala</option>
                                    <option value="singida">Singida</option>
                                    <option value="mwanza">Mwanza</option>
                                    <option value="pwani">Pwani</option>
                                </select>
                            </div>
                        </div>

                        <div id="arushaInfo" class="office-info"><br>
                            <h2>ARUSHA</h2><br>
                            <p>Arusha</p>
                            <p>Mahali: ENGO LA CAMARTEC, BARABARA YA NJIRO</p>
                            <p>Anuani: 7335 Arusha</p>
                            <p>Nukushi: -</p>
                            <p>Number ya Simu: 027 2549438</p>
                            <p>Barua Pepe: arusha@wma.go.tz</p>
                        </div>

                        <div id="dodomaInfo" class="office-info"><br>
                            <h2>DODOMA</h2><br>
                            <p>Dodoma</p>
                            <p>Mahali: JENGO LA KAMBARAGE OROFA YA 10 </p>
                            <p>Anuani: 266 Dodoma</p>
                            <p>Nukushi: -</p>
                            <p>Number ya Simu: 026 2321757</p>
                            <p>Barua Pepe: dodoma@wma.go.tz</p>
                        </div>

                        <div id="ilalainfo" class="office-info"><br>
                            <h2>ILALA</h2><br>
                            <p>Ilala</p>
                            <p>Mahali: Mtaa wa Uhuru, Ilala Boma </p>
                            <p>Anuani: 313, Dar Es Salaam</p>
                            <p>Nukushi: -</p>
                            <p>Number ya Simu: 022 2203105 </p>
                            <p>Barua Pepe: ilala@wma.go.tz</p>
                        </div>
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.sw.announcments_and_events')
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('regionalOffice').addEventListener('change', function() {
            var arushaInfo = document.getElementById('arushaInfo');
            var dodomaInfo = document.getElementById('dodomaInfo');
            var ilalainfo = document.getElementById('ilalainfo');

            arushaInfo.style.display = 'none';
            dodomaInfo.style.display = 'none';
            ilalainfo.style.display = 'none';

            if (this.value === 'arusha') {
                arushaInfo.style.display = 'block';
            } else if (this.value === 'dodoma') {
                dodomaInfo.style.display = 'block';
            } else if (this.value === 'ilala') {
                ilalainfo.style.display = 'block';
            }

        });
    </script>
@endsection
