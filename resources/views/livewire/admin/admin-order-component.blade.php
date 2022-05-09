<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                            {{-- @if(Session::has('message'))
                                <div class="alert alert-success">{{ Session::get('message') }}</div>

                            @endif --}}
                        <div class="row">
                            <div class="col-md-6">
                                    All orders
                            </div>

                        </div>

                    </div>
                    <div class="panel panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>ZipCode</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th>Details</th>
                                    {{-- <th>Order Date</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order )
                                <tr>



                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->subtotal }}</td>
                                    <td>{{ $order->discount }}</td>
                                    <td>{{ $order->tax }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->firstname}}</td>
                                    <td>{{ $order->lastname}}</td>
                                    <td>{{ $order->mobile }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->zipcode }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <a href="{{ route ('admin.ordersdetails',[$order->id]) }}" class="btn btn-danger">Details</a>
                                    </td>

                                    {{-- <td>
                                        <a href="#"  onclick="confirm('Are you sure, you want to delete this product?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{ $product->id }})"><i class="fa fa-times fa-2x text-info"></i></a>
                                    </td> --}}

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{ $orders->links() }}

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
