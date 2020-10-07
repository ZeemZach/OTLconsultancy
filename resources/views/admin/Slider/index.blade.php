@extends('layouts.app', [
'class' => '',
'elementActive' => 'Slider'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Slider </h4>
                    <a type="button" href="{{ route('Slider.create') }}" class="btn btn-primary float-left">
                        <i class="fa fa-plus"></i> Add Slider
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
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach($Slider as $key => $Slider)
                            <tr>



                                <td>
                                    <img src="{{ $Slider->photo }}" style="height:100px;width:200px;">

                                </td>
                                <td>
                                    <a class="btn btn-secondary float-left" href="{{ route('Slider.edit',$Slider->id) }}">
                                        <i class="fa fa-edit"></i> Edit Slider
                                    </a>

                                    <form action="{{ route('Slider.destroy',$Slider->id) }}" method="POST">


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