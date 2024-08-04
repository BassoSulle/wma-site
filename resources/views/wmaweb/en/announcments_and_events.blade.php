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
                {{-- @foreach ($resources_products as $product) --}}
                <div class="media">
                    <a href="#">
                        <img src="https://www.wma.go.tz/uploads/1718109034-4Z9A8735.jpg"
                            style="width: 128px; height: 90px; object-fit: cover;" class="img-thumbnail d-flex mr-3" />
                        {{-- <img class="d-flex mr-3" src="{{ asset('storage/' . $article->img) }}" alt="Thumbnail"> --}}
                    </a>
                    <div class="media-body">
                        <div class="news-title">
                            <h2 class="title-small pt-0 mt-0">
                                <a href="#" class="link-no-underline">TANGAZO KWA WAUZAJI WA SARUJ</a>
                            </h2>
                        </div>
                        <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                            02 Feb, 2024</small>
                    </div>
                </div>
                <div class="media">
                    <a href="#">
                        <img src="https://www.wma.go.tz/uploads/1718109034-4Z9A8735.jpg"
                            style="width: 128px; height: 90px; object-fit: cover;" class="img-thumbnail d-flex mr-3" />
                        {{-- <img class="d-flex mr-3" src="{{ asset('storage/' . $article->img) }}" alt="Thumbnail"> --}}
                    </a>
                    <div class="media-body">
                        <div class="news-title">
                            <h2 class="title-small pt-0 mt-0">
                                <a href="#" class="link-no-underline">TANGAZO KWA WAUZAJI WA SARUJ</a>
                            </h2>
                        </div>
                        <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                            02 Feb, 2024</small>
                    </div>
                </div>
                <div class="media">
                    <a href="#">
                        <img src="https://www.wma.go.tz/uploads/1718109034-4Z9A8735.jpg"
                            style="width: 128px; height: 90px; object-fit: cover;" class="img-thumbnail d-flex mr-3" />
                        {{-- <img class="d-flex mr-3" src="{{ asset('storage/' . $article->img) }}" alt="Thumbnail"> --}}
                    </a>
                    <div class="media-body">
                        <div class="news-title">
                            <h2 class="title-small pt-0 mt-0">
                                <a href="#" class="link-no-underline">TANGAZO KWA WAUZAJI WA SARUJ</a>
                            </h2>
                        </div>
                        <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                            02 Feb, 2024</small>
                    </div>
                </div>
                {{-- @endforeach --}}

                <div class="row justify-content-center mt-2">
                    <a href="#" class="link-no-underline"><i>View
                            all <i class="far fa-arrow-alt-circle-right"></i></i></a>
                </div>
            </div>

            <!-- Announcements Tab Pane -->
            <div class="tab-pane" id="announcements" role="tabpanel">
                {{-- @foreach ($news_articles as $article) --}}
                <div class="media">
                    <div class="media-body">
                        <div class="news-title">
                            <h2 class="title-small pt-0 mt-0">
                                <a href="#" class="link-no-underline">TANGAZO KWA WAUZAJI WA SARUJ</a>
                            </h2>
                        </div>
                        <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                            02 Feb, 2024</small>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">
                        <div class="news-title">
                            <h2 class="title-small pt-0 mt-0">
                                <a href="#" class="link-no-underline">TANGAZO KWA WAUZAJI WA SARUJ</a>
                            </h2>
                        </div>
                        <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                            02 Feb, 2024</small>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">
                        <div class="news-title">
                            <h2 class="title-small pt-0 mt-0">
                                <a href="#" class="link-no-underline">TANGAZO KWA WAUZAJI WA SARUJ</a>
                            </h2>
                        </div>
                        <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i>
                            02 Feb, 2024</small>
                    </div>
                </div>
                {{-- @endforeach --}}
                <!-- Add a link for "Tazama Zote" -->
                <div class="row justify-content-center mt-2">
                    <a href="#" class="link-no-underline"><i>View all <i
                                class="far fa-arrow-alt-circle-right"></i></i></a>
                </div>
            </div>

        </div>
    </aside>
    </div>
