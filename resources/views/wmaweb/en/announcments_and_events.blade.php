    <aside class="col-12 sticky side-bar px-2 sm-hide bg-white pb-3">
        <ul class="nav nav-tabs row pl-3" role="tablist" id="myTab">
            <li class="nav-item col-6 float-left px-0 text-left">
                <a class="nav-link active px-0" data-toggle="tab" href="#events" role="tab">Events</a>
            </li>
            <li class="nav-item col-6">
                <a class="nav-link px-0" data-toggle="tab" href="#announcements" role="tab">Announcements</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content sidebar-tabing" id="nav-tabContent">
            <!-- events Tab Pane -->
            <div class="tab-pane active" id="events" role="tabpanel">
                @foreach ($events as $item)
                    <div class="media">
                        <a href="#">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                style="width: 128px; height: 90px; object-fit: cover;"
                                class="img-thumbnail d-flex mr-3" />
                        </a>
                        <div class="media-body">
                            <div class="news-title">
                                <h2 class="title-small pt-0 mt-0 article-h2 text-uppercase">
                                    <a href="{{ route('event_details', ['language' => $current_language, 'slug' => $item->slug]) }}"
                                        class="link-no-underline">{{ $item->title }}</a>
                                </h2>
                            </div>
                            <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                {{ $item->created_at->format('M j, Y') }}</small>
                        </div>
                    </div>
                @endforeach

                <div class="row justify-content-center mt-2">
                    <a href="{{ route('all_events', ['language' => $current_language]) }}"
                        class="link-no-underline"><i>View
                            all <i class="far fa-arrow-alt-circle-right"></i></i></a>
                </div>
            </div>

            <!-- Announcements Tab Pane -->
            <div class="tab-pane" id="announcements" role="tabpanel">
                @foreach ($announcements as $item)
                    <div class="media">
                        <div class="media-body">
                            <div class="news-title">
                                <h2 class="title-small pt-0 mt-0 article-h2 text-uppercase">
                                    <a href="{{ route('announcement_details', ['language' => $current_language, 'slug' => $item->slug]) }}"
                                        class="link-no-underline">{{ $item->title }}</a>
                                </h2>
                            </div>
                            <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                                {{ $item->created_at->format('M j, Y') }}</small>
                        </div>
                    </div>
                @endforeach

                <!-- Add a link for "Tazama Zote" -->
                <div class="row justify-content-center mt-2">
                    <a href="{{ route('all_announcements', ['language' => $current_language]) }}"
                        class="link-no-underline"><i>View all <i class="far fa-arrow-alt-circle-right"></i></i></a>
                </div>
            </div>

        </div>
    </aside>
    </div>
