<header>
    <div class="header-up">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div class="d-flex gap-4">
                    <a href="#">(+01)-2345-6789</a>
                    <a href="#">Our location</a>
                </div>
                <span>Super Value Deals - Save more with coupons</span>
                {{-- <div class="d-flex align-items-center justify-content-center gap-2">
                    <a href="#" class="d-block">Log In / Sign Up</a>
                </div> --}}
                <div>

                    <select class="form-select" aria-label="Default select example">
                        <option value="1">
                            <img width="130" src="{{ asset("/img/logo.svg") }}" alt="" class="img-fluid">
                        </option>
                        <option value="2">English</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <nav class="py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-5">
                    <a href="{{ url("/") }}"><img width="130" src="{{ asset("/img/logo.svg") }}" alt="" class="img-fluid"></a>
                    <div class="nav-menu2">
                        <i id="closeMenu" class="fas fa-times d-none cursor-pointer"></i>
                        <div class="d-md-inline-block d-none nav-menu d-flex align-items-center">
                            <a href="{{ url("/") }}" class="{{ Request::is('/') ? 'active' : null }}">Home</a>
                            <a href="{{ url("/shop") }}" class="{{ Request::is('shop') ? 'active' : null }}">Shop</a>
                            <a href="#" class="{{ Request::is('blogs') ? 'active' : null }}">Blogs</a>
                            <a href="#"  class="{{ Request::is('contact') ? 'active' : null }}">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <div class="d-lg-none d-inline-block">
                        <i class="fas fa-search fs-5"></i>
                    </div>
                    <form action="" class="d-lg-inline-block d-none">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <a href="{{ asset("/login") }}" class="text-dark">
                        <i class="fa-solid fa-circle-user fs-3"></i>
                    </a>
                    <a href="{{ url("/cart") }}" class="position-relative text-dark">
                        <i class="fa-solid fa-bag-shopping fs-3"></i>
                        <span class="position-absolute top-0 start-100 translate-middle px-2 text-white bg-danger border border-light rounded-circle border-box">
                            3
                          <span class="visually-hidden">New alerts</span>
                        </span>
                    </a>
                    <div class="d-md-none d-inline-block">
                        <i id="menuBar" class="fas fa-bars fs-4 cursor-pointer"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
