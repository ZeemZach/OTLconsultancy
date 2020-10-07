@extends('layouts.app', [
'class' => '',
'elementActive' => 'category'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Category </h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCategory">
                        <i class="fa fa-plus"></i> Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="AddCategory" tabindex="-1" role="dialog" aria-labelledby="AddCategoryTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="col-md-12" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">

                                    <div class="modal-body">
                                        @csrf

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <label class="col-md-3 col-form-label">{{ __(' Category Name') }}</label>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                                        </div>
                                                        @if ($errors->has('name'))
                                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>

                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($Category as $Category)
                            <tr>

                                <td>{{ $Category->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary float-left" data-toggle="modal" data-target="#UpdateCategory">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <div class="modal fade" id="UpdateCategory" tabindex="-1" role="dialog" aria-labelledby="UpdateCategoryTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form class="col-md-12" action="{{ route('category.update',$Category->id) }}" method="POST" enctype="multipart/form-data">

                                                    <div class="modal-body">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <label class="col-md-3 col-form-label">{{ __(' Category Name') }}</label>
                                                                    <div class="col-md-9">
                                                                        <div class="form-group">
                                                                            <input type="text" name="name" value="{{ $Category->name }}" class="form-control" placeholder="Name" required>
                                                                        </div>
                                                                        @if ($errors->has('name'))
                                                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                                            <strong>{{ $errors->first('name') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="update" value="update" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('category.destroy',$Category->id) }}" method="POST">


                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
@endpush