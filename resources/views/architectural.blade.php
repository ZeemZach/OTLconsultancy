@extends('app')

@section('title') Architectural & structural Design | Odisha Testing Laboratoty and Consultancy Services  @endsection

@section('description') Otlconsultancy Structural Engineering division provides complete building Structural Design and Detailing services. Expert Team of well experienced Structural Engineers, BIM modelers and Draftsmen with industry/domain knowledge and qualification, Experience in design and detailing of RCC Pre-Cast/Cast In-Situ and Steel Structures have been the main strengths @endsection

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

                                    <h3 class="font-size-35 line-height-normal margin-bottom-10 capitalization">Architectural & structural Design</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>
                                    <p class="font-size-16 margin-bottom-15">Otlconsultancy Structural Engineering division provides complete building Structural Design and Detailing services. Expert Team of well experienced Structural Engineers, BIM modelers and Draftsmen with industry/domain knowledge and qualification, Experience in design and detailing of RCC Pre-Cast/Cast In-Situ and Steel Structures have been the main strengths.</p>
                                    <p class="font-size-16 margin-bottom-15">Design Software proficiency: Etabs, Safe, SAP2000, Staad Pro, Concise beam, CSI Col</p>
                                    <p class="font-size-16 margin-bottom-15">BIM & Detailing Software expertise: Tekla, Revit, AutoCAD, CADS RC</p>
                                    <p class="font-size-16 margin-bottom-15"><b>Design codes:</b> IS, ACI, UBC, BS, Euro, NZS, SBC, EN</p>
                                    <p class="font-size-16 margin-bottom-15">As part of structural design services, we provide our customers following complete structural engineering services for building & Industrial projects which ensure structural stability with cost efficiency of the building:</p>
                                    <p class="font-size-16 margin-bottom-15">- Concept structural design</p>
                                    <p class="font-size-16 margin-bottom-15">- Feasibility study</p>
                                    <p class="font-size-16 margin-bottom-15">- Cost comparison of various structural systems</p>
                                    <p class="font-size-16 margin-bottom-15">- Detailed structural design</p>
                                    <p class="font-size-16 margin-bottom-15">- Projects vetting</p>
                                    <p class="font-size-16 margin-bottom-15">- Value engineering</p>
                                    <p class="font-size-16 margin-bottom-15">The team has taken up many challenging projects domestic & international in the past which require following special knowledge and skills:</p>
                                    <p class="font-size-16 margin-bottom-15">- Pre-stressed precast elements design</p>
                                    <p class="font-size-16 margin-bottom-15">- Rigid/semi- rigid diaphragm design</p>
                                    <p class="font-size-16 margin-bottom-15">- Flat slab design for seismic conditions</p>
                                    <p class="font-size-16 margin-bottom-15">- Temperature analysis</p>
                                    <p class="font-size-16 margin-bottom-15">- Soft story design</p>
                                    <p class="font-size-16 margin-bottom-50">We serve u the best.</p>
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