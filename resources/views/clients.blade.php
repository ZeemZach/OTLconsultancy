@extends('app')

@section('title') Our Clients | Odisha Testing Laboratory  @endsection

@section('description') Established in Bhubaneswar ,(Odisha) named “ Odisha Testing Laboratory and
Consultancy Services ” an ISO 9001:2008 Certified company, and also NABL accredited
Laboratory . We are providing various kind of Civil Engineering services include Material
Testing ,Sub- Soil Investigation , Engineering Survey, Design ,Drawing, DPR & Estimate
.These are offered as per the requirement of customers.
 Our team of experts and professional Engineers are
gaining Experience from past many years in the field of civil engineering. Further our team
managed and guided by our Expert Mr. S P Sethi who has achieved excellent exposure in civil
engineering services by providing complete Customers satisfaction. We have 11 nos
employees including Material Engineer ,Designer , Estimator , Surveyor , Road Designer ,
Marketing Representatives, we use latest and high accuracy machinery and equipment in our
services . We provide these services in various part of the country and make a permanent
relationship with our esteemed clients @endsection


@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Our Clients</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ route('index') }}" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Our Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="container">
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="40" data-smobi="40"></div>

                                    <h2 class="text-center margin-bottom-10">OUR CLIENTS</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                </div>
                                
                                <div class="col-md-12">
                                    <div class="wprt-galleries-grid has-bullets bullet-style-1 bullet30 has-arrows arrow-style-1 arrow-position-2" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="0" data-gapv="5">
                                        <div id="images-wrap" class="cbp">
                                            @foreach($clients as $client)
                                            <div class="cbp-item">
                                                <div class="item-wrap">
                                                    <a class="zoom" href="{{$client['path']}}"><i class="fa fa-arrows-alt"></i></a>
                                                    <img class="client-img" src="{{$client['path']}}" alt="image" />
                                                </div>
                                                <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                                <div class="wprt-toggle style-1 active">
                                                    <h3 class="toggle-title">{{$client['company_name']}}</h3>
                                                    <div class="toggle-content">{{$client['description']}}</div>
                                                </div>
                                            </div>
                                            <!--/.cbp-item -->
                                            @endforeach
                                        </div><!-- /#images-wrap -->
                                    </div>
                                    <div class="wprt-spacer" data-desktop="40" data-mobi="40" data-smobi="40"></div>
                                    <!--/.wprt-galleries-grid -->
                                </div>
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="40" data-smobi="40"></div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection