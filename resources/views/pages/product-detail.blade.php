@extends("layouts.app")
@section("content")

    {{-- breadcrumb start --}}
    <div class="bg-gray py-3">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="{{ url("/shop") }}" class="mb-0 fs-6">Shop</a></li>
                  <li class="breadcrumb-item active fs-6" aria-current="page">Henley Shirt</li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- breadcrumb finish --}}

    {{-- products start --}}
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid rounded-25">
                <div class="row g-0">
                    <div class="col-xl-3 col-lg-4 col-6">
                        <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid cursor-pointer border border-success">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h1>Henley Shirt</h1>
                <div class="fs-5 text-muted">Brands: <span class="text-success">Nike</span></div>
                <div class="fs-5 text-muted">Categories: <span class="text-success">Nike, Category</span></div>
                <hr>
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <div class="text-success fs-2 fw-bold">$116</div>
                    <div class="text-muted fs-6 text-decoration-line-through">$200.00</div>
                    <div class="text-dark fs-5">25% Off</div>
                </div>
                <hr>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis earum quas porro itaque. Quod sapiente doloribus ducimus blanditiis laborum cupiditate dolorem? Non dolorum alias quis velit doloribus voluptatem rem vitae voluptatum vel quisquam facilis dolore nihil eaque nisi placeat, aspernatur provident distinctio illo fugit ducimus. Reprehenderit explicabo voluptate velit accusantium dicta hic quas officiis, consequatur totam, officia molestias id cum, dolore est voluptatum error quo molestiae labore quibusdam? Vero, accusantium aspernatur?</p>
                <div class="d-flex gap-3 flex-wrap mb-3">
                    <div class="fs-5">Size:</div>
                    <div class="d-flex gap-3 flex-wrap">
                        <button class="btn btn-success">M</button>
                        <button class="btn btn-outline-secondary">L</button>
                        <button class="btn btn-outline-secondary">XL</button>
                        <button class="btn btn-outline-secondary">XXL</button>
                    </div>
                </div>
                <div class="d-flex gap-3 flex-wrap mb-3">
                    <div class="fs-5">Count:</div>
                    <div>
                        <input style="width: 53px" type="number" class="form-control" value="1">
                    </div>
                </div>
                <button class="btn btn-success">Add to Cart</button>
            </div>
        </div>
    </div>
    {{-- products finish --}}

    {{-- reviews start --}}
    <section class="mb-5">
        <div class="container">
            <h3 class="text-success mb-2">Reviews(3)</h3>

            <div class="alert alert-warning mb-4">
                <p class="fs-6 mb-0">Yorum yapabilmek için giriş yapmalısınız.</p>
            </div>

            <div class="d-flex mb-3">
                <div class="d-md-inline-block d-none me-4">
                    <img width="130" src="{{ asset("/img/avatar-1.jpg") }}" alt="" class="img-fluid rounded-circle">
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Can Oğuzorhan</h5>
                        <div>
                            <i class="fa-solid fa-calendar-days fs-6 me-2"></i>
                            <span>29/09/2022</span>
                        </div>
                    </div>
                    <div class="comment-stars text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident deserunt molestiae nulla illo similique reprehenderit minus alias, deleniti impedit consequuntur excepturi esse incidunt nesciunt illum corrupti vitae, reiciendis laboriosam.</p>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="d-md-inline-block d-none me-4">
                    <img width="130" src="{{ asset("/img/avatar-2.jpg") }}" alt="" class="img-fluid rounded-circle">
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Can Oğuzorhan</h5>
                        <div>
                            <i class="fa-solid fa-calendar-days fs-6 me-2"></i>
                            <span>29/09/2022</span>
                        </div>
                    </div>
                    <div class="comment-stars text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident deserunt molestiae nulla illo similique reprehenderit minus alias, deleniti impedit consequuntur excepturi esse incidunt nesciunt illum corrupti vitae, reiciendis laboriosam.</p>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="d-md-inline-block d-none me-4">
                    <img width="130" src="{{ asset("/img/avatar-3.jpg") }}" alt="" class="img-fluid rounded-circle">
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Can Oğuzorhan</h5>
                        <div>
                            <i class="fa-solid fa-calendar-days fs-6 me-2"></i>
                            <span>29/09/2022</span>
                        </div>
                    </div>
                    <div class="comment-stars text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident deserunt molestiae nulla illo similique reprehenderit minus alias, deleniti impedit consequuntur excepturi esse incidunt nesciunt illum corrupti vitae, reiciendis laboriosam.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- reviews finish --}}

    {{-- related start --}}
    <div class="container">
        <h3 class="text-success mb-0">Related Products</h3>

        <div class="row">

            <div class="col-xl-3 col-lg-4 col-6 mb-3">
                <a href="{{ url("/product-detail/product-1") }}">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4 class="text-dark">Colorful Patern Shirts</h4>
                            <div class="product-stars text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="my-2">
                                <a class="text-success fs-5 fw-bold">
                                    $238.85
                                    <span class="text-muted fs-6 text-decoration-line-through ms-md-2 d-md-inline-block d-block">
                                        $245.7
                                    </span>
                                </a>
                            </div>
                            <a href="" class="btn btn-success rounded-5 position-absolute bottom-0 end-0 me-4 mb-4">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-6 mb-3">
                <a href="{{ url("/product-detail/product-1") }}">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4 class="text-dark">Colorful Patern Shirts</h4>
                            <div class="product-stars text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="my-2">
                                <a class="text-success fs-5 fw-bold">
                                    $238.85
                                    <span class="text-muted fs-6 text-decoration-line-through ms-md-2 d-md-inline-block d-block">
                                        $245.7
                                    </span>
                                </a>
                            </div>
                            <a href="" class="btn btn-success rounded-5 position-absolute bottom-0 end-0 me-4 mb-4">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-6 mb-3">
                <a href="{{ url("/product-detail/product-1") }}">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4 class="text-dark">Colorful Patern Shirts</h4>
                            <div class="product-stars text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="my-2">
                                <a class="text-success fs-5 fw-bold">
                                    $238.85
                                    <span class="text-muted fs-6 text-decoration-line-through ms-md-2 d-md-inline-block d-block">
                                        $245.7
                                    </span>
                                </a>
                            </div>
                            <a href="" class="btn btn-success rounded-5 position-absolute bottom-0 end-0 me-4 mb-4">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-4 col-6 mb-3">
                <a href="{{ url("/product-detail/product-1") }}">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4 class="text-dark">Colorful Patern Shirts</h4>
                            <div class="product-stars text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="my-2">
                                <a class="text-success fs-5 fw-bold">
                                    $238.85
                                    <span class="text-muted fs-6 text-decoration-line-through ms-md-2 d-md-inline-block d-block">
                                        $245.7
                                    </span>
                                </a>
                            </div>
                            <a href="" class="btn btn-success rounded-5 position-absolute bottom-0 end-0 me-4 mb-4">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- related start --}}

@endsection
