@extends('app')

@section('title') Material Testing | Odisha Testing Laboratoty and Consultancy Services  @endsection

@section('description') Materials testing offers assurance that components used in your infrastructure or products are fit for purpose and capable of performing over their expected lifespan. At Otlconsultancy, we also provide a range of Total Quality Assurance services that complement our materials testing. @endsection

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

                                    <h3 class="font-size-35 line-height-normal margin-bottom-10 capitalization">Material Testing</h3>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class="font-size-22 margin-bottom-20">Materials testing offers assurance that components used in your infrastructure or products are fit for purpose and capable of performing over their expected lifespan.</p>
                                    <p class="font-size-16 margin-bottom-15">Materials testing is a diligent approach to ensuring that your infrastructure and vital equipment will provide continued production, undergo minimal degradation and are designed with optimal performance in mind. Materials testing can also supply a wealth of information about the materials you are developing or incorporating into products to ensure they perform within expected specifications. </p>
                                    <p class="font-size-16 margin-bottom-15">Ensuring that crucial materials are fit for purpose presents a challenge to developers, operators and manufacturers across many industries globally. You need assurance that your equipment and infrastructure will perform to the end of its design life with minimal maintenance, failure mitigation and with mechanical strength prioritised and planned for.   To optimise your R&D programmes you will need a comprehensive understanding of your materials or products under development.</p>
                                    <p class="font-size-16 margin-bottom-15">Conducting materials testing for customers for over four decades, we are your ideal partner to provide the independent and industry-leading services you require.  Our expertise covers Building Material, Cement, aggregate, steel, water, Bricks Concrete Mix design. Pile integrity test (PIT) ,Rebound hammer. Tile & Non Destructive test of all types of structure.</p>
                                    <p class="font-size-16 margin-bottom-50">At Otlconsultancy, we also provide a range of Total Quality Assurance services that complement our materials testing. These services include consultancy, testing  and inspection in the areas of non-destructive testing, materials analysis, oil, and the provision of expert witnesses.</p>
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