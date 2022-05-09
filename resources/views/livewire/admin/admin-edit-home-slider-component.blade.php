
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Slide
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.homeslider') }}" class="btn btn-success pull-right">All slides</a>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body container" style="padding :30px;" >
                        @if(Session::has('message'))
                              <div class="alert alert-success">{{ Session::get('message') }}</div>

                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateSlide">
                            <div class="form-group row ">
                              <label  class="col-md-4 col-form-label" >Title</label>
                              <div class="col-md-4">
                                <input type="text" class="form-control"  placeholder="product name" wire:model="title">
                              </div>
                            </div>
                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Subtitle</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control"  placeholder="product slug" wire:model="subtitle">
                                </div>
                            </div>


                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Price</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" placeholder="regular price" wire:model="price">
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Link</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control"  placeholder="link" wire:model="link" >
                                </div>
                            </div>



                            <div class="form-group row ">
                                <label class="col-md-4 col-form-label" >Status</label>
                                <div class="col-md-4">
                                  <select class="form-control" wire:model="status">
                                      <option value="0">Inactive</option>
                                      <option value="1">Active</option>
                                  </select>

                                </div>
                            </div>



                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Image</label>
                                <div class="col-md-4">
                                  <input type="file" class="form-control" placeholder="image" wire:model="newimage">
                                  @if($newimage)
                                      <img src="{{ $newimage->temporaryUrl() }}" width="120"/>
                                  @else
                                      <img src="{{asset('assets/images/sliders') }}/{{ $image }}" width="120"/>
                                  @endif
                                </div>
                            </div>



                            <div class="form-group row ">
                                <div class="col-md-4"></div>


                                <div class="col-md-4">
                                  <button type="submit" class="form-control btn btn-success in-block" >Submit</button>
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

