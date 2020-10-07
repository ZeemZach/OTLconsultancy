<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
@extends('layouts.app', [
'class' => '',
'elementActive' => 'profile'
])

@section('content')
<div class="content">
    <div class="card-body">
        <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="row">
                <form class="col-md-12" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">{{ __('Add Gallery Photos') }}</h5>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Choose Category') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <select data-role="tagsinput" name="cat_id[]" id="cars" multiple="multiple" required>
                                            @foreach ($Category as $Category)

                                            <option value={{ $Category->name }}>{{ $Category->name }}</option>



                                            @endforeach
                                        </select>
                                    </div>

                                    @if ($errors->has('cat_id'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('name') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">

                                        <input type="text" name="name" class="form-control" placeholder="Enter Gallery Name" required>
                                    </div>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('Gallery Name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Upload Image ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" placeholder="Password Confirmation" required>
                                    </div>
                                    <label class="notes">*Note: For better view in website upload 570w X 335h of image size</label> 
                                    @if ($errors->has('image'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Description') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea type="text" name="description" class="form-control" placeholder="Enter Your Description" required></textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-round">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection