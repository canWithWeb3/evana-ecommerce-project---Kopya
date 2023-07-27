@extends("layouts.app")
@section("content")

    <section class="container my-5">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th style="width: 130px;">Image</th>
                        <th>Name</th>
                        <th style="width: 90px;">Price</th>
                        <th style="width: 40px;">Quantity</th>
                        <th style="width: 90px;">Subtotal</th>
                        <th style="width: 40px;">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="p-0">
                            <img width="130" src="{{ asset("/img/product-1-1.jpg") }}" alt="" class="img-fluid">
                        </th>
                        <th class="text-success fs-4">Henley Shirt</th>
                        <th>$110</th>
                        <th>
                            <input type="number" class="form-control" value="2">
                        </th>
                        <th>$220</th>
                        <th>
                            <button class="btn btn-danger btn-sm fs-5"><i class="fa-regular fa-trash-can"></i></button>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Cart Totals</h3>
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Cart Subtotal</th>
                                <th class="text-success">$240.00</th>
                            </tr>
                            <tr>
                                <th>Shipping</th>
                                <th class="text-success">$10.00</th>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th class="text-success">$250.00</th>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ url("/checkout") }}" class="btn btn-success">Process to Checkout</a>
                </div>
            </div>
        </div>
    </section>

@endsection
