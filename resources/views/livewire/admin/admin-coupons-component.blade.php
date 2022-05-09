<div class="container" style="padding: 30px 0" >
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(Session::has('message'))
                         <div class="alert alert-success"> {{ Session::get('message') }}</div>

                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            All Coupon
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addcoupon') }}" class="btn btn-success pull-right">Add Coupon</a>
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                   <table class="table" >
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Coupon Code</th>
                        <th scope="col">Coupon Type</th>
                        <th scope="col">Coupon Value</th>
                        <th scope="col">Cart value</th>
                        <th scope="col">Expiry Date</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ( $coupons as $coupon )


                      <tr>
                        <th scope="row">{{ $coupon->id }}</th>
                        <td>{{ $coupon->code }}</td>
                        <td>{{ $coupon->type }}</td>
                        @if($coupon->type == 'fixed')
                            <td>{{ $coupon->value }}</td>
                        @else
                            <td>{{ $coupon->value }}%</td>
                        @endif
                        <td>{{ $coupon->cart_value }}</td>
                        <td>{{ $coupon->expiry_date }}</td>

                        <td>
                            <a href="{{ route('admin.editcoupon',[$coupon->id]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                            <a href="#" onclick="confirm('Are you sure, you want to delete this coupon?') || event.stopImmediatepropagation()" wire:click.prevent='deleteCoupon({{ $coupon->id }})' ><i class="fa fa-times fa-2x text-danger"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                   </table>

                </div>
            </div>

        </div>
    </div>
</div>

