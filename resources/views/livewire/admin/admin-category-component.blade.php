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
                            Add New Category
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.addcategory') }}" class="btn btn-success pull-right">Add Category</a>
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                   <table class="table" >
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">CATEGORY NAME</th>
                        <th scope="col">SLUG</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ( $categories as $category )


                      <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <a href="{{ route('admin.editcategory',[$category->slug]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                            <a href="#" onclick="confirm('Are you sure, you want to delete this category?') || event.stopImmediatepropagation()" wire:click.prevent='deleteCategory({{ $category->id }})' ><i class="fa fa-times fa-2x text-danger"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                   </table>
                   {{ $categories->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
