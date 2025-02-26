
<header class="">

</header>

<nav class="p-1 sticky-top bg-black">
    <div class="container">
        <div class="row justify-content-end align-items-center">
            <div class="col-6 col-md-3">
                <a href="/"><img height="60" width="100" src="{{ asset('storage') .'/'. app('settings')['site_logo'] }}" alt="Learn Stacks"></a>
            </div>

            <!-- For desktop -->
            <div class="col-6 col-md-9 ">
                <div class="d-desktop d-phone">
                    <ul class="list-unstyled text-white d-flex justify-content-end align-items-center mb-0">
                        <li class="px-3 fs-5 navbar_items"><a class="text-decoration-none text-grey" href="/">Home</a></li>
                        @foreach ($categories as $category)
                            <li class="px-3 fs-5 navbar_items"><a class="text-decoration-none text-grey" href="{{ route('frontend.post', $category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                        <li class="px-3 fs-5 navbar_items"><a class="text-decoration-none text-grey" href="{{ route('frontend.page', 'about-us') }}">About Us</a></li>
                        <li class="px-3 fs-5 navbar_items">
                            @if (Auth::check())
                                <div class="dropdown text-end">
                                    <a class="dropdown-toggle fs-3 text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background:transparent;">
                                        <img src="{{ Auth::user()?->avatar }}" alt="Learn Stacks" style="border-radius: 50%; width:50px; height:50px;margin-top:0px;">
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{#"><i class="fa-solid fa-user"></i> Profile</a></li>
                                    <li><a class="dropdown-item fs-6 text-danger" href="{{ route('frontend.logout') }}"><i class="fa-solid fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            @else
                                <a class="text-decoration-none text-grey" href="{{ route('frontend.login') }}">Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="d-phone d-tab text-end h-100">
                    <div class="h-100 d-flex align-items-center justify-content-end">
                        <button class="btn text-white border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-3 mt-1"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- For mobile -->
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel"><i class="fa-solid fa-list"></i> Navigation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="list-unstyled mb-0">
                <li class="px-3 fs-5 navbar_items"><a class="text-decoration-none d-block text-dark" href="/"><i class="fa-solid text-dark fa-house"></i> Home</a></li>
            <hr>
          </div>
        </div>
    </div>
</nav>