<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add Coupon
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.coupon') }}" class="btn btn-success pull-right">All Coupons</a>
                        </div>
                    </div>

                </div>
                <div class="panel-body container" style="padding :30px;" >
                    @if(Session::has('message_success'))
                            <div class="alert alert-success">{{ Session::get('message_success') }}</div>

                    @endif

                    @if(Session::has('message_success'))
                    <div class="alert alert-success">{{ Session::get('message_error') }}</div>

                    @endif
                    <form class="form-horizontal" wire:submit.prevent="changePassword">
                        <div class="form-group  ">
                            <label  class="col-md-4 control-label" >Current Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control input-md"  placeholder="Current Password" name="current_password" wire:model="password" >
                                @error('current_password')<p class="text-danger">{{ $message }}</p>

                                @enderror
                            </div>
                        </div>



                            <div class="form-group  ">
                                <label  class="col-md-4 control-label" >New Password</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md"  placeholder="Current Password" name="password" wire:model="new_password" >
                                    @error('new_password')<p class="text-danger">{{ $message }}</p>

                                    @enderror
                                </div>
                            </div>

                            <div class="form-group  ">
                                <label  class="col-md-4 control-label" >Confirm Password</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md"  placeholder="Current Password" name="password_confirmation" wire:model="password_confirmation">
                                    @error('password_confirmation')<p class="text-danger">{{ $message }}</p>

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

