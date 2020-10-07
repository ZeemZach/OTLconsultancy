@extends('app')

@section('title')  Gallery | Odisha Testing Laboratoty and Consultancy Services @endsection

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
                <h1 class="featured-title-heading">Gallery</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{ route('index') }}" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Gallery</span>
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
                    <!-- Gallery -->
                    <section id="works" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

                                    <h2 class="text-center margin-bottom-20">OUR GALLERY</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->

                        <div class="wprt-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="0" data-gapv="0">
                            <div id="project-filter">
                                <div data-filter="*" class="cbp-filter-item">
                                    <span>All</span>
                                </div>
                                @foreach($categories as $category)
                                <div data-filter=".{{$category->name}}" class="cbp-filter-item">
                                    <span>{{$category->name}}</span>
                                </div>
                                @endforeach
                            </div><!-- /#project-filter -->

                            <div id="projects" class="cbp">
                                @foreach ($store as $store) 
                                <?php $id = $store->category_id;
                                $cate_name = DB::table('categories')->select('name')->where('id',$id)->get();
                                ?>
                                 
                                <div class="cbp-item 
                                @foreach($cate_name as $ca)
                                {{ $ca->name }}
                                @endforeach
                                ">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                                <figure class="effect-sadie">
                                                    <img src="{{$store->path}}" alt="image" />
                                                    <figcaption>
                                                        <div>
                                                            <h2><a target="_blank" href="#">{{$store->description}}</a></h2>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="{{$store->path}}" data-title="{{$store->description}}">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.cbp-item -->
                                @endforeach

                                
                            </div><!-- /#projects -->
                        </div>
                        <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>
                                   
                        <!--/.wprt-project -->
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection