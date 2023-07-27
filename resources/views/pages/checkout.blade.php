@extends("layouts.app")
@section("content")

    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="mb-4">
                    <h4 class="mb-3">Billing Details</h4>

                    <div class="d-flex flex-column gap-3">
                        <input type="text" class="form-control" placeholder="Name">
                        <input type="text" class="form-control" placeholder="Address">
                        <input type="text" class="form-control" placeholder="City">
                        <input type="text" class="form-control" placeholder="Country">
                        <input type="text" class="form-control" placeholder="Postcode">
                        <input type="text" class="form-control" placeholder="Phone">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div>
                    <h4 class="mb-3">Additional Information</h4>

                    <textarea rows="5" class="form-control" placeholder="Order notes"></textarea>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Cart Totals</h3>
                        <table class="table table-striped table-bordered text-center mb-4">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="width:110px;" class="p-0">
                                        <img width="110" src="{{ asset("/img/product-2-1.jpg") }}" alt="" class="img-fluid">
                                    </th>
                                    <th>
                                        <div class="text-success fs-5">Harley Shirt</div>
                                    </th>
                                    <th>$240.00</th>
                                </tr>
                                <tr>
                                    <th style="width:110px;" class="p-0">
                                        <img width="110" src="{{ asset("/img/product-3-1.jpg") }}" alt="" class="img-fluid">
                                    </th>
                                    <th>
                                        <div class="text-success fs-5">Harley Shirt</div>
                                    </th>
                                    <th>$240.00</th>
                                </tr>
                                <tr>
                                    <th style="width:110px;" class="p-0">
                                        <img width="110" src="{{ asset("/img/product-4-1.jpg") }}" alt="" class="img-fluid">
                                    </th>
                                    <th>
                                        <div class="text-success fs-5">Harley Shirt</div>
                                    </th>
                                    <th>$240.00</th>
                                </tr>

                                <tr>
                                    <td>SubTotal</td>
                                    <td colspan="2">$280.00</td>
                                </tr>

                                <tr>
                                    <td>Shipping</td>
                                    <td colspan="2">Free Shipping</td>
                                </tr>

                                <tr>
                                    <td>Total</td>
                                    <td colspan="2" class="text-success">$280.00</td>
                                </tr>
                            </tbody>
                        </table>

                        <h4>Payment</h3>

                        <div class="payment-radios mb-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="directBankTransfer" value="directBankTransfer" checked>
                                <label class="form-check-label" for="directBankTransfer">
                                  Direct Bank Transfer
                                </label>
                            </div>
                            <div class="form-chec mb-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="checkPayment" value="checkPayment">
                                <label class="form-check-label" for="checkPayment">
                                    Check Payment
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="paypal" value="paypal">
                                <label class="form-check-label" for="paypal">
                                    Paypal
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-success">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
