@extends('layouts.master_all')
@section('content')
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Galleries</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{route('/')}}" title="Construction" rel="home" class="trail-begin">Home</a>
                            <span class="sep">/</span>
                            <span class="trail-end">Galleries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <section class="wprt-section">
                            <div class="container">
                                <div class='row'>
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="40" data-smobi="40"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <h3 class="text-center margin-bottom-10">CAROUSEL</h3>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                                        <div class="wprt-galleries-grid has-bullets bullet-style-1 bullet30 has-arrows arrow-style-1 arrow-position-2" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                            <div id="images-wrap" class="cbp">
                                                @foreach($Galleries_1 as $v_img)
                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{URL::to($v_img->image)}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{URL::to($v_img->image)}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->
                                                @endforeach

                                            </div><!-- /#images-wrap -->
                                        </div><!--/.wprt-galleries-grid -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <h3 class="text-center margin-bottom-10">CUSTOM COLUMN & GUTTER</h3>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                                        <div class="wprt-galleries-grid has-bullets bullet-style-2 bullet30" data-layout="slider" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="10" data-gapv="10">
                                            <div id="images-wrap" class="cbp">
                                                @foreach($Galleries_2 as $v_img)
                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{URL::to($v_img->image)}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{URL::to($v_img->image)}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->
                                                @endforeach

                                            </div><!-- /#images-wrap -->
                                        </div><!--/.wprt-galleries-grid -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3>GALLERY WITH THUMBNAIL</h3>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                                        <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                            <div id="wprt-slider" class="flexslider">
                                                <ul class="slides">
                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/1.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/1.jpg')}}" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/2.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/2.jpg')}}" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/3.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/3.jpg')}}" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/4.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/4.jpg')}}" alt="image" />
                                                    </li>
                                                </ul>
                                            </div>

                                            <div id="wprt-carousel" class="flexslider">
                                                <ul class="slides">
                                                    <li><img src="{{asset('/frontend/assets/img/gallery/1-s.jpg')}}" alt="image"></li>
                                                    <li><img src="{{asset('/frontend/assets/img/gallery/2-s.jpg')}}" alt="image"></li>
                                                    <li><img src="{{asset('/frontend/assets/img/gallery/3-s.jpg')}}" alt="image"></li>
                                                    <li><img src="{{asset('/frontend/assets/img/gallery/4-s.jpg')}}" alt="image"></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <h3>SIMPLE GALLERY</h3>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                                        <div class="wprt-galleries-grid arrow-style-1 has-bullets bullet-style-2 bullet30 has-arrows arrow60 arrow-position-2" data-layout="slider" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-gaph="0" data-gapv="0">
                                            <div id="images-wrap" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/1.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/1.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/2.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/2.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/3.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/3.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->
                                            </div><!-- /#images-wrap -->
                                        </div><!--/.wprt-galleries-grid -->
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <h3>GALLERY MASONRY GRID</h3>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                                        <div class="wprt-galleries-grid" data-layout="grid" data-column="3" data-column2="2" data-column3="2" data-column4="1" data-gaph="10" data-gapv="10">
                                            <div id="images-wrap" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/1.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/1.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/5.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/5.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/2.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/2.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/6.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/6.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/7.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/7.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="item-wrap">
                                                        <a class="zoom" href="{{asset('/frontend/assets/img/gallery/4.jpg')}}"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="{{asset('/frontend/assets/img/gallery/4.jpg')}}" alt="image" />
                                                    </div>
                                                </div><!--/.cbp-item -->
                                            </div><!-- /#images-wrap -->
                                        </div><!--/.wprt-galleries-grid -->

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
