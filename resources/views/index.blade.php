@extends('app')

@section('title') Odisha Testing Laboratory and Consultancy Services @endsection

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
<!-- Hero Background SlideShow -->
<div id="hero-section" data-number="4" @foreach($Slider as $key=> $Slider)
    data-image-{{ ++$key }}="{{ $Slider->photo }}"
    @endforeach data-effect="fade">
    <div class="hero-content">
        <div class="hero-title">
            <h1>ARCHITECTURAL DESIGN</h1>
            <h1>STRUCTURAL DESIGN</h1>
            <h1>MATERIAL TESTING</h1>
            <h1>GEO TECH INVESTIGATION</h1>
            <h1>HIGHWAY & BRIDGE</h1>
        </div>

        <div class="links">
            <a class="wprt-button big rounded-3px" href="{{ route('about') }}">LEARN MORE</a>

        </div>
    </div>

    <a class="arrow scroll-target" href="#site-content"></a>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <section class="wprt-section about">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 margin-auto">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                    <h2 class="text-center margin-bottom-10">Who We Are</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"> </div>

                                    <p class="wprt-subtitle">"Odisha testing laboratory and
                                        consultancy services" an certified company, and also NABL accredited
                                        laboratory. We are providing various kind of civil engineering services include material
                                        testing, sub - soil investigation, engineering survey, design, drawing, dpr & estimate.
                                        These are offered as per the requirement of customers.</p>
                                    <div class="wprt-spacer" data-desktop="60" data-mobi="20" data-smobi="20"></div>
                                </div>

                                <div class="col-md-6">
                                    <h3 class="line-height-normal margin-bottom-10">Why Choose Us</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class=" margin-bottom-25">Our team of experts and professional Engineers are gaining Experience from past many years in the field of civil engineering.Further our team managed and guided by our Expert Mr. S P Sethi who has achieved excellent exposure in civil engineering services by providing complete Customers satisfaction.</p>
                                    <p>We have employees including Material Engineer ,Designer , Estimator , Surveyor , Road Designer , Marketing Representatives, we use latest and high accuracy machinery and equipment in our services. We provide these services in various part of the country and make a permanent relationship with our esteemed clients.</p>
                                    <div class="wprt-spacer" data-desktop="60" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="wprt-galleries-grid has-bullets bullet-style-1 bullet30" data-layout="slider" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-gaph="0" data-gapv="5">
                                        <div id="images-wrap" class="cbp">
                                            <div class="cbp-item">
                                                <div class="item-wrap">
                                                    <a class="zoom" href="images/iso-logo.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="images/iso-logo.jpg" alt="image" />
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="item-wrap">
                                                    <a class="zoom" href="images/nabl-logo.png"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="images/nabl-logo.png" alt="image" />
                                                </div>
                                            </div>
                                            <!--/.cbp-item -->
                                        </div><!-- /#images-wrap -->
                                    </div>
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                    @include('components.intro')
                    @include('components.funfact')
                    @include('components.service')
                    @include('components.promotion')

                    <!-- WHY US-->
                    <section id="why-us" class="wprt-section">
                        <div class="wprt-spacer" data-desktop="60" data-mobi="60" data-smobi="60" style="height:0px"></div>
                        <div class="container-fluid no-padding">
                            <div class="row no-margin">
                                <div class="col-md-6 no-padding">
                                    <img src="assets/img/group.jpg" alt="image">
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 no-padding">
                                    <div class="wprt-content-box style-2">
                                        <h2 class="margin-bottom-20">What We Deliver?</h2>
                                        <div class="wprt-lines style-1 custom-2">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                        <div class="wprt-toggle bg-white style-1">
                                            <h3 class="toggle-title">Timely Delivery And Perfection In Work</h3>
                                            <div class="toggle-content">Our team of experts and professional Engineers are
                                                gaining Experience from past many years in the field of civil engineering.Further our team
                                                managed and guided by our Expert Mr. S P Sethi who has achieved excellent exposure in civil
                                                engineering services by providing complete Customers satisfaction.</div>
                                        </div>

                                        <div class="wprt-toggle bg-white style-1">
                                            <h3 class="toggle-title">Latest And High Accuracy Machinery/Equipment</h3>
                                            <div class="toggle-content"> We have
                                                employees including Material Engineer ,Designer , Estimator , Surveyor , Road Designer ,
                                                Marketing Representatives, we use latest and high accuracy machinery and equipment in our
                                                services. We provide these services in various part of the country and make a permanent
                                                relationship with our esteemed clients.</div>
                                        </div>

                                    </div><!-- /.wprt-content-box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                        <div class="wprt-spacer" data-desktop="60" data-mobi="60" data-smobi="60" style="height:0px"></div>
                    </section>
                </div><!-- /.page-content -->
            </div>
        </div>
    </div>
</div>
@endsection