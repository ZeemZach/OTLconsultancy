@extends('layouts.app', [
'class' => '',
'elementActive' => 'gallery'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Gallery </h4>
                    <a type="button" href="{{ route('gallery.create') }}" class="btn btn-primary float-left">
                        <i class="fa fa-plus"></i> Add Gallery
                    </a>
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
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach($Product as $key => $Product)
                            <tr>



                                <td>{{ $Product->name }}</td>
                                <td>
                                    <img src="{{ $Product->path }}" style="height:100px;width:200px;">

                                </td>
                                <td>
                                    {{ $Product->description }}
                                </td>
                                <td>
                                    <a class="btn btn-secondary float-left" href="{{ route('gallery.edit',$Product->id) }}">
                                        <i class="fa fa-edit"></i> Edit galllery
                                    </a>
                                    <form action="{{ route('gallery.destroy',$Product->id) }}" method="POST">


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