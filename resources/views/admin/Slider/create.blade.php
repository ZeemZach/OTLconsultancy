@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Slider'
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
                <form class="col-md-12" action="{{ route('Slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">{{ __('Add Slider Photos') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Upload Image ') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" placeholder="Password Confirmation" required>
                                    </div>
                                    <label class="notes">*Note: For better view in website upload 1000w X 300h of image size</label> 
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
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
