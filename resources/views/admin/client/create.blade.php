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
                <form class="col-md-12" action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">{{ __('Add Client Photos') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Comapany Name') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                     
                                        <input type="type" name="company_name" class="form-control" placeholder="Enter Comapany Name" required >
                                    </div>                                  
                                    @if ($errors->has('company_name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('company_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Upload Image ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="file" name="image_file" class="form-control" required>
                                    </div>  
                                    <label class="notes">*Note: For better view in website upload 570w X 335h of image size</label> 
                                    @if ($errors->has('image_file'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('image_file') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Description') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea type="text" name="description" class="form-control" placeholder="Enter Your Description" ></textarea>
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
