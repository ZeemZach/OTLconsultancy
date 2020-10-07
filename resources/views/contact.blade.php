@extends('app')

@section('title') Contact Us | Odisha Testing Laboratoty and Consultancy Services  @endsection

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
                <h1 class="featured-title-heading">Contact Us</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ route('index') }}" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Contact Us</span>
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
                            <div class="row row-flex justify-content-center">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                    <h2 class="text-center margin-bottom-10">GET IN TOUCH WITH US</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>
                                    <p class="wprt-subtitle">Our team will come back to you within a matter of hours to help you.</p>
                                    <div class="wprt-spacer" data-desktop="60" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-6 mb-md-30">
                                    <div class="gmap">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.540072518497!2d85.7680276143952!3d20.277900718362652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a7979b8f8c5f%3A0x6ed7f7ba0f5aef19!2sOdisha%20Testing%20Laboratory%20and%20Consultancy%20Services!5e0!3m2!1sen!2sin!4v1599991690328!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>                                    
                                </div>
                                <div class="col-md-6 block-center">
                                    @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                    @endif @if (session('warning'))
                                    <div class="alert alert-warning">
                                        {{ session('warning') }}
                                    </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                    </div>
                                    @endif
                    
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                
                                    <form class="wprt-contact-form" method="post" action="{{ route('contactus.store') }}" >
                                        @csrf
                                        <div class="input-wrap">
                                            <input type="text" value="" tabindex="1" placeholder="Name *" name="name" id="name" required>
                                        </div>
                                        <div class="input-wrap">
                                            <input type="email" value="" tabindex="2" placeholder="Email *" name="email" id="email" required>
                                        </div>
                                        <div class="input-wrap">
                                            <input type="text" value="" tabindex="4" placeholder="Subject *" name="service" id="subject" required>
                                        </div>
                                        <div class="input-wrap">
                                            <textarea class="" tabindex="5" placeholder="Message *" name="message" id="message" required></textarea>
                                        </div>
                                        <div class="input-wrap">
                                            <div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6LeHFQEVAAAAAJ-uVbE2TfJESug5c5CoWNp6K0d-"></div>
                    
                                                @if($errors->has('g-recaptcha-response'))
                                                    <span class="invalid-feedback" style="display:block;">
                                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                    </span>
                                                
                                                @endif
                                        </div>
                                        <br/>
                                        <div class="send-wrap">
                                            <input type="submit" value="SEND MESSAGE" id="submit" name="submit" class="submit">
                                        </div>
                                    </form><!-- /.wprt-contact-form -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                        <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                    </section>

                    <!-- PARTNERS -->
                        </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection