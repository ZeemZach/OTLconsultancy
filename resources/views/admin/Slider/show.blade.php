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
                    <h4 class="card-title"> Gallery </h4>
                    <a type="button" href="{{ route('Slider.index') }}" class="btn btn-primary float-left" >
                        <i class="fa fa-backward"></i> Back
                    </a>
                      
                      <!-- Modal -->
                    
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
    @endif
    <div class="row">
        <!--begin::Col-->
        <!--begin::Col-->
        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-4">
            <!--begin::Card-->
            <div class="card card-custom gutter-b card-stretch">
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header pb-1">
                                        <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-shopping-cart-1"></i>
                                            </span>
                                            <span class="navi-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-calendar-8"></i>
                                            </span>
                                            <span class="navi-text">Event</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-graph-1"></i>
                                            </span>
                                            <span class="navi-text">Report</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Post</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-writing"></i>
                                            </span>
                                            <span class="navi-text">File</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-4">
                            <div class="symbol symbol-circle symbol-lg-75">
                                <img src="{{ $Slider->photo }}" style="height:100px;width:200px;" alt="image">
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="text-muted font-weight-bold">{{ $Slider->title }}</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::User-->
                    <!--begin::Desc-->
                    <a href="#" class="text-primary pr-1">{{ $Slider->details }}</a></p>
                    <!--end::Desc-->
                    <!--begin::Info-->
                    <div class="mb-7">
                        <div class="d-flex justify-content-between align-items-center">
                        
                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Details:</span>
                                    
                            <span class="text-dark-75 font-weight-bolder mr-2">{{ $Slider->details }}</span>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Body-->
            </div>
            <!--end:: Card-->
        </div>
        </div>
        <!--end::Col-->
    </div>
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
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endpush