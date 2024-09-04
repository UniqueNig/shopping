<x-master>
    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>


                    <tbody class="align-middle">
                        @foreach($carts as $cart)
                        <tr>

                            @foreach ($cart->product->images as $img)
                            <td class="align-middle"><img src="{{ asset('storage') }}/{{ $img->path}}" alt="" style="width: 50px;"> {{ $cart->name }}</td>
                            @endforeach


                            <td class="align-middle">${{ $cart->product->amount }}</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">

                                    <input type="number" class="form-control form-control-sm bg-secondary text-center" value="{{ $cart->quantity }}">

                                </div>
                            </td>
                            <td class="align-middle">${{ $cart->product->amount * $cart->quantity }}</td>
                            <td class="align-middle"><a type="submit"  href="{{ route('carts.delete', $cart->id) }}" class="btn btn-sm btn-primary delete-button"><i class="fa fa-times"></i></a></td>

                        </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                @if($carts->count() > 0)
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 id="subTotal" class="font-weight-medium">${{ ($cart->product->amount * $cart->quantity )}} </h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$ {{ ($cart->product->amount * 10/100) }}</h6>
                        </div>

                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">${{ ($cart->product->amount * $cart->quantity  + $cart->product->amount * 10/100)}} </h5>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Cart End -->
</x-master>
