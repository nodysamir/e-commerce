
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Category
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.categories') }}" class="btn btn-success pull-right">All Category</a>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body container" style="padding :30px;" >
                        @if(Session::has('message'))
                              <div class="alert alert-success">{{ Session::get('message') }}</div>

                        @endif
                        <form wire:submit.prevent="updateCategory">
                            <div class="form-group row ">
                              <label for="inputEmail3" class="col-sm-2 col-form-label" >Category Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="category name" wire:model="name" wire:keyup="generateslug">
                                @error('name')<p class="text-danger">{{ $message }}</p>

                                @enderror
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword3" class="col-sm-2 col-form-label">Category Slug</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="category slug" wire:model="slug">
                                @error('slug')<p class="text-danger">{{ $message }}</p>

                                @enderror
                              </div>

                            <div class="form-group row ">
                              <div class="col-sm-10  ">
                                <button type="submit" class="btn btn-primary ">Update</button>
                              </div>
                            </div>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

