@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'contact'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Contact us </h4>
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
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contact as $contact)
        <tr>
            
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}
            <td>
                <form action="{{ route('contact.destroy',$contact->id) }}" method="POST">
   
                  
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