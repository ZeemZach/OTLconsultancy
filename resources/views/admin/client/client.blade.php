@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'client'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Client </h4>
                    <a type="button" href="{{ route('client.create') }}" class="btn btn-primary float-left" >
                        <i class="fa fa-plus"></i> Add client
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
            <th>Subject</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contact as $contact)
        <tr>
            
            <td>{{ $contact->company_name }}</td>
            <td>
                <img src="{{ $contact->path }}" style="height:100px;width:200px;">
            </td>
            
            <td>{{ $contact->description }}</td>
            <td>
                <a class="btn btn-secondary float-left" href="{{ route('client.edit',$contact->id) }}">
                    <i class="fa fa-edit"></i> Edit galllery
                </a>
                
                <form action="{{ route('client.destroy',$contact->id) }}" method="POST">
   
                  
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