@extends("layouts.app")
@section("content")

    {{-- breadcrumb start --}}
    <div class="bg-gray py-3">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="{{ url("/") }}" class="mb-0 fs-6">Home</a></li>
                  <li class="breadcrumb-item active fs-6" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- breadcrumb finish --}}

    {{-- products finish --}}
    <div class="container py-5">
        <div class="fs-5 mb-3">We found <span class="text-success">688</span> items for you!</div>

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

        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    {{-- products finish --}}

@endsection
