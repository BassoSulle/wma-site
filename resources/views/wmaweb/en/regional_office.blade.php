@extends('wmaweb.en.base_layout')

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
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home', ['language' => $current_language]) }}"><span
                                            class="fas fa-home"></span></a>
                                </li>
                                <li class="breadcrumb-item list-inline-item active">Regional Offices</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 bg-white py-3 page-content">
                        <div class="form-group">
                            <div class="regional-office-select">
                                <h4><label for="regionalOffice">Select regional office:</label></h4>
                                <select class="form-control" id="regionalOffice" name="regionalOffice">
                                    <option selected>Select office</option>
                                    @foreach ($region_offices as $office)
                                        <option value="{{ $office->slug }}">{{ $office->region_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        @foreach ($region_offices as $office)
                            <div id="{{ $office->slug }}Info" class="office-info"><br>
                                <p>{{ strtoupper($office->content) }}</p>
                                <hr>
                                <p>{{ $office->region_name }}</p><br>
                                <p><span style="font-weight: bold;">Contact person:
                                        {{ $office->contact_person_name }}</span>, {{ $office->contact_person_position }}
                                </p>
                                <p><span style="font-weight: bold;">Location: </span>{{ $office->location }}</p>
                                <p><span style="font-weight: bold;">Address: </span>{{ $office->address }}</p>
                                <p><span style="font-weight: bold;">Phone No: </span>{{ $office->telephone }}</p>
                                <p><span style="font-weight: bold;">Email: </span>{{ $office->email }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-md-3 navigation-column">
                        @include('wmaweb.en.announcments_and_events')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('regionalOffice').addEventListener('change', function() {
            var selectedValue = this.value;
            var officeInfos = document.getElementsByClassName('office-info');

            // Hide all office information
            for (var i = 0; i < officeInfos.length; i++) {
                officeInfos[i].style.display = 'none';
            }

            // Display the selected office information
            if (selectedValue) {
                var selectedOfficeInfo = document.getElementById(selectedValue + 'Info');
                if (selectedOfficeInfo) {
                    selectedOfficeInfo.style.display = 'block';
                }
            }
        });
    </script>
@endsection
