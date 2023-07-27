@extends("layouts.app")
@section("content")
    {{-- header down start --}}
    <section class="mb-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2 text-lg-start text-center pt-5">
                    <span class="text-secondary fs-4 fw-bold">Hot promotions</span>
                    <h2 class="display-4 fw-bold">Fashion Trending<br><span class="text-success">Great Collection</span></h2>
                    <div class="text-muted mb-3 fs-5">Save more wtih coupons & up to 20% off</div>
                    <a href="" class="btn btn-success fs-5 px-4">Shop Now</a>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="{{ asset("/img/home-img.png") }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    {{-- header down finish --}}

    {{-- featured products start --}}
    <section>
        <div class="container">
            <h3 class="h2 mb-4"><span class="text-success">Featured</span> Products</h3>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-6 mb-3">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4>Colorful Patern Shirts</h4>
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
                </div>
                <div class="col-xl-3 col-lg-4 col-6 mb-3">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-2-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4>Colorful Patern Shirts</h4>
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
                </div>
                <div class="col-xl-3 col-lg-4 col-6 mb-3">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-3-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4>Colorful Patern Shirts</h4>
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
                </div>
                <div class="col-xl-3 col-lg-4 col-6 mb-3">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-4-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4>Colorful Patern Shirts</h4>
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
                </div>
                <div class="col-xl-3 col-lg-4 col-6 mb-3">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-5-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4>Colorful Patern Shirts</h4>
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
                </div>
                <div class="col-xl-3 col-lg-4 col-6 mb-3">
                    <div class="card rounded-25">
                        <div class="card-body position-relative">
                            <img src="{{ asset("/img/product-6-1.jpg") }}" alt="" class="img-fluid rounded-25">
                            <div class="text-muted">Nike</div>
                            <h4>Colorful Patern Shirts</h4>
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
                </div>
            </div>
        </div>
    </section>
    {{-- featured products finish --}}



@endsection
