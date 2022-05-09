<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                          @if(Session::has('message'))
                             <div class="alert alert-success">{{ Session::get('message') }}</div>

                           @endif
                        <div class="row">
                            <div class="col-md-6">
                                  All Slides
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addhomeslider') }}" class="btn btn-success pull-right"> Add Slides</a>
                            </div>
                        </div>

                    </div>
                    <div class="panel panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Price</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($sliders as $slide )
                                <tr>



                                    <td>{{ $slide->id }}</td>
                                    <td><img src="{{ asset('assets/images/sliders') }}/{{ $slide->image }}" width="60"></td>
                                    <td>{{ $slide->title }}</td>
                                    <td>{{ $slide->subtitle }}</td>
                                    <td>{{ $slide->price }}</td>
                                    <td>{{ $slide->link}}</td>
                                    <td>{{ $slide->status == 1 ?'Active':'Inactive'}}</td>
                                    <td>{{ $slide->created_at }}</td>
                                     <td>
                                        <a href="{{ route ('admin.edithomeslider',[$slide->id]) }}" class="btn btn-danger"><i class="fa fa-edit fa-2x text-info"></i></a>
                                    </td>

                                    <td>
                                     <a href="#" wire:click.prevent="deleteSlide({{ $slide->id }})"><i class="fa fa-times fa-2x text-info"></i></a>
                                 </td>

                                </tr>
                               @endforeach
                            </tbody>

                        </table>
                        {{-- {{ $products->links() }} --}}

                    </div>

                </div>
            </div>

        </div>

    </div>
 </div>
