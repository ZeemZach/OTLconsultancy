@extends('app')

@section('title') Geotechnical Investigation | Odisha Testing Laboratoty and Consultancy Services  @endsection

@section('description') GEO Technical Investigation test Report. Soil, Paver Block, Pile & Plate Load test capacity 1000 Ton. Chemical Test of water & Soil @endsection

@section('content')
<!-- Featured Title -->

<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Service Detail</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ route('index') }}" title="testing" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <a href="{{ route('service') }}" title="testing" rel="home" class="trail-begin">Services</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Service Detail</span>
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
                    <!-- service detail -->
                    <section id="service" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>

                                    <h3 class="font-size-35 line-height-normal margin-bottom-10 capitalization">Geotechnical Investigation</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class="font-size-22 margin-bottom-20">Geotechnical report is a tool used to communicate the site conditions, design and construction recommendations.</p>
                                    <p class="font-size-16 margin-bottom-15">These investigations form the basis for planning, designing, and constructing the structures. The serviceability and performance of the structure depend on the accuracy and adequacy of these investigations. How accurate the information in the geotechnical report is strongly influences the design, construction, project cost, and safety.</p>
                                    <p class="font-size-16 margin-bottom-15">Geotechnical evaluations study the physical properties of soil and rock to identify potential construction problems and evaluate distress to earthworks and structures caused by weakness or failure of subsurface materials; such data is necessary to have before creating foundation designs and other structural plans.</p>
                                    <p class="font-size-16 margin-bottom-15">Our geotechnical investigation team performs site background review of data such as geologic mapping and aerial photographs, as well as field services such as utility clearance, coordination with site representatives, logging of borings and collecting soil samples for laboratory analysis. Proper planning and field execution are critical to the delivery of sound and cost-effective building design.</p>
                                    <p class="font-size-16">Our geotechnical investigation team support projects after the soils report by providing:</p>
                                    <p class="font-size-16">-  geotechnical expert witness services</p>
                                    <p class="font-size-16">-  response to building department reviews</p>
                                    <p class="font-size-16">-  addendums for changes</p>
                                    <p class="font-size-16">-  foundation plan review/signature</p>
                                    <p class="font-size-16">-  construction services such as observation, compaction testing, and footing inspections.</p>
                                    <p class="font-size-16 margin-bottom-50">At Otlconsultancy, we also provide Soil, Paver Block, Pile & Plate Load test capacity 1000 Ton. Chemical Test of water & Soil.</p>
                                    <div class="row">
                                        <div class="col-sm-12  row-flex">
                                            <a class="wprt-button btn-request" href="{{ route('contact') }}">SEND US REQUEST</a>
                                            <div class="wprt-button btn-question row-flex">
                                                <span class="question">Need help or have a question?</span>
                                                <span class="tel">+918249525997</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="35" data-mobi="35" data-smobi="35"></div>
                                </div>
                                <div class="col-sm-1">&nbsp;</div>
                                <div class="col-sm-3">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                    <p class="block-center">Need help or have a question?</p>
                                    <a class="wprt-button btn-request-right block-center" href="{{ route('contact') }}">SEND US REQUEST</a>
                                    <div class="wprt-button btn-question-right block-center"">
                                        <span class="tel">+918249525997</span>
                                    </div>
                                    <a class="wprt-button btn-question-right block-center" href="mailto:odishatestinglab@gmail.com">
                                        <span class="email">Email</span>
                                    </a> 
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="50" data-smobi="50"></div>
                                    <p class="block-center">Look Into Our Other Services</p>
                                    <ul class="services_detail_links">
                                        <li>
                                            <div class="line"></div>
                                            <a class="wprt-button btn-service-link block-center" href="{{route('material')}}">
                                                <span class="link">Material Testing</span>
                                            </a> 
                                        </li>
                                        <li>
                                            <div class="line"></div>
                                            <a class="wprt-button btn-service-link block-center" href="{{route('geo_technical')}}">
                                                <span class="link">Geo Technical Invest</span>
                                            </a> 
                                        </li>
                                        <li>
                                            <div class="line"></div>
                                            <a class="wprt-button btn-service-link block-center" href="{{route('soil_investigation')}}">
                                                <span class="link">Soil Invest</span>
                                            </a> 
                                        </li>
                                        <li>
                                            <div class="line"></div>
                                            <a class="wprt-button btn-service-link block-center" href="{{route('architectural')}}">
                                                <span class="link">Arch & Structural</span>
                                            </a> 
                                        </li>
                                        <li>
                                            <div class="line"></div>
                                            <a class="wprt-button btn-service-link block-center" href="{{route('surveying')}}">
                                                <span class="link">Surveying</span>
                                            </a> 
                                        </li>
                                        <li>
                                            <div class="line"></div>
                                            <a class="wprt-button btn-service-link block-center" href="{{route('highway')}}">
                                                <span class="link">Highway & Bridge</span>
                                            </a> 
                                            <div class="line"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                </div>
                            </div><!-- /.row -->
                        </div>
                    </section>
                </div>
            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->
@endsection