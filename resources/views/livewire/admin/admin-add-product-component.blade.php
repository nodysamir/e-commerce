
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Products
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body container" style="padding :30px;" >
                        @if(Session::has('message'))
                              <div class="alert alert-success">{{ Session::get('message') }}</div>

                        @endif
                        <form enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group row ">
                              <label  class="col-md-4 col-form-label" >Product Name</label>
                              <div class="col-md-4">
                                <input type="text" class="form-control"  placeholder="product name" wire:model="name" wire:keyup="generateSlug">
                                @error('name')<p class="text-danger">{{ $message }}</p>

                                @enderror
                              </div>
                            </div>
                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Product Slug</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control"  placeholder="product slug" wire:model="slug">
                                  @error('slug')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Short Description</label>
                                <div class="col-md-4" wire:ignore>

                                    <textarea class="form-control" id="short_description" placeholder="short description" wire:model="short_description"></textarea>
                                    @error('short_description')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-md-4 col-form-label" >Description</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea class="form-control" id="description" placeholder="short description" wire:model="description"></textarea>
                                    @error('description')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Regular Price</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" placeholder="regular price" wire:model="regular_price">
                                  @error('regular_price')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Sale price</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control"  placeholder="sale price" wire:model="sale_price" >
                                  @error('sale_price')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Sku</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" placeholder="sku" wire:model="SKU" >
                                  @error('SKU')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-md-4 col-form-label" >Stock</label>
                                <div class="col-md-4">
                                  <select class="form-control" wire:model="stock_status">
                                      <option value="instock">Instock</option>
                                      <option value="outstock">Out of stock</option>
                                  </select>
                                  @error('stock_status')<p class="text-danger">{{ $message }}</p>

                                @enderror

                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-md-4 col-form-label" >feature</label>
                                <div class="col-md-4">
                                  <select class="form-control" wire:model="featured">
                                      <option value="0">No</option>
                                      <option value="1">Yes</option>
                                  </select>


                                </div>
                            </div>



                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Quantity</label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" placeholder="quantity" wire:model="quantity" >
                                  @error('quantity')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label  class="col-md-4 col-form-label" >Image</label>
                                <div class="col-md-4">
                                  <input type="file" class="form-control" placeholder="image" wire:model="image">
                                  @if($image)
                                      <img src="{{ $image->temporaryUrl() }}" width="120"/>
                                  @endif
                                  @error('image')<p class="text-danger">{{ $message }}</p>

                                @enderror
                                </div>
                            </div>

                            <div class="form-group  row">
                                <label class="col-md-4 col-form-label" >Category</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                      <option value="">Select Category</option>
                                      @foreach ($categories as $category )
                                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                    @error('category_id')<p class="text-danger">{{ $message }}</p>

                                @enderror

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
@push('scripts')
<script>
    $(function(){

        tinymce.init({
            selector:'#short_description',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var sd_data = $('#short_description').val();
                    @this.set('short_description',sd_data);
                });
            }
        });
        tinymce.init({
            selector:'#description',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var sd_data = $('#description').val();
                    @this.set('description',sd_data);
                });
            }
        });
    });
</script>


@endpush
