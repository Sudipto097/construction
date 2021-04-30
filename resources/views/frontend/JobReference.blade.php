@extends('layouts.master_all')
@section('content')
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Job Reference</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{route('/')}}" title="Construction" rel="home" class="trail-begin">Home</a>
                            <span class="sep">/</span>
                            <span class="trail-end">Job Reference</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-center margin-bottom-20">OUR HONOURABLE CLIENTS</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                        <p class="wprt-subtitle">The client of a company is the mirror that shows the real face of the company and we have a huge client that speaks of our goodwill and success. Our quality and highly customized products have made us liked by our customers and enabled us to have repeat orders. The Major Client served by us are</p>
                                        <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-12 -->


                                    <div class="col-md-12">
                                        <table id="datatable" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th class="title text-center">SL.</th>
                                                <th class="title text-center">Name of the Company</th>
                                                <th class="title text-center">Area of uses</th>
                                                <th class="title text-center">Products</th>
                                                <th class="title text-center">Areas (SFT)</th>
                                            </tr>
                                            </thead>
                                            <tbody class="purchase_body">
                                            <?php $number = 0; ?>
                                            @foreach($all as $v_img)

                                                <tr class="purchase_row">
                                                    <td class="text-center">{{$number+1}}</td>
                                                    <?php $number++; ?>
                                                    <td class="text-center">{{$v_img->company}}</td>
                                                    <td class="text-center">{{$v_img->area_of_uses}}</td>
                                                    <td class="text-center">{{$v_img->products}}</td>
                                                    <td class="text-center">{{$v_img->areas}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>

                                    </div><!-- /.col-md-8 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
