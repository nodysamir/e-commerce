<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Edit Coupon
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.coupon') }}" class="btn btn-success pull-right">All Coupons</a>
                        </div>
                    </div>

                </div>
                <div class="panel-body container" style="padding :30px;" >
                    @if(Session::has('message'))
                          <div class="alert alert-success">{{ Session::get('message') }}</div>

                    @endif
                    <form class="form-horizontal" wire:submit.prevent="updateCoupon">
                        <div class="form-group  ">
                          <label  class="col-md-4 control-label" >Coupon Code</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control input-md"  placeholder="coupon code" wire:model="code" >
                             @error('code')<p class="text-danger">{{ $message }}</p>

                             @enderror
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-md-4 control-label">Coupon Type</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="type">
                                  <option value="">Select</option>
                                  <option value="fixed">Fixed</option>
                                  <option value="percent">Percent</option>
                                </select>
                                @error('type')<p class="text-danger">{{ $message }}</p>

                                @enderror
                            </div>
                        </div>

                            <div class="form-group">
                               <label  class="col-md-4 control-label" >coupon Value</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control input-md"  placeholder="coupon code" wire:model="value" >
                                   @error('value')<p class="text-danger">{{ $message }}</p>

                                   @enderror
                                </div>
                            </div>

                          <div class="form-group  ">
                            <label  class="col-md-4 control-label" >Cart Code</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control input-md"  placeholder="coupon code" wire:model="cart_value" >
                               @error('cart_value')<p class="text-danger">{{ $message }}</p>

                               @enderror
                            </div>
                          </div>

                          <div class="form-group  ">
                            <label  class="col-md-4 control-label" >Expiry Date</label>
                            <div class="col-md-4" wire:ignore>
                              <input type="text" id="expiry-date"  class="form-control input-md"  placeholder="expiry date" wire:model="expiry_date" >
                               @error('expiry_date')<p class="text-danger">{{ $message }}</p>

                               @enderror
                            </div>
                          </div>

                        <div class="form-group ">
                          <label class="col-md-4 control-label"></label>
                          <div class="col-md-4  ">
                            <button type="submit" class="btn btn-primary form-control  ">Submit</button>
                          </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function (){
            $('#expiry-date').datetimepicker({
               format : 'Y-MM-DD',
            })
            .on('dp.change',function(ev){
                var data = $('#expiry-date').val();
                @this.set('expiry_date',data);

            });


        });

    </script>

@endpush





