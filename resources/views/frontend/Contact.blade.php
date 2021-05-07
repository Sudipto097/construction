@extends('layouts.master_all')
@section('content')
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Contact Us</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{route('/')}}" title="Construction" rel="home" class="trail-begin">Home</a>
                            <span class="sep">/</span>
                            <span class="trail-end">Contact Us</span>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2692220187782!2d90.43327601429667!3d23.737777095176813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c71df46669%3A0x8fdde18b1f60e4e2!2sSky%20View%20S.F%20Tower%20Shopping%20Complex!5e0!3m2!1sen!2sbd!4v1598120027745!5m2!1sen!2sbd" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                            <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-center margin-bottom-20">GET IN TOUCH WITH US</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                        <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper ut arcu non placerat. Praesent nibh massa varius.</p>
                                        <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-4">
                                        <h5>Address</h5>
                                        <p>Dhaka Office : Sky View S.F Tower Shopping Complex, 65/3,(1st floor, Building planner office) Kodomtola,Dhaka</p>
                                        <p>Khulna Office:7/1 Hazi meher Ali road Iqbalnagar khulna.</p>

                                        <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                        <h5>Phone number</h5>
                                        <p>+88 01762790097, +880 01829211820</p>

                                        <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                        <h5>E-mail address</h5>
                                        <p>exploitcons@gmail.com</p>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="10" data-smobi="10"></div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-8">
                                        <form class="wprt-contact-form" method="post" action="{{route('user-message')}}">
                                            @csrf
                                            <div class="inner">
                                                <div class="left-side">
                                                    <div class="input-wrap">
                                                        <input type="text" value="" tabindex="1" placeholder="Name *" name="name" id="name" required>
                                                    </div>
                                                    <div class="input-wrap">
                                                        <input type="email" value="" tabindex="2" placeholder="Email *" name="email" id="email" required>
                                                    </div>
                                                    <div class="input-wrap">
                                                        <input type="text" value="" tabindex="4" placeholder="Subject *" name="subject" id="subject" required>
                                                    </div>
                                                    <div class="message-wrap">
                                                        <textarea class="" tabindex="5" placeholder="Message *" name="message" id="message" required></textarea>
                                                    </div>
                                                    <div class="send-wrap">

                                                        <button type="submit">SEND MESSAGE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- /.wprt-contact-form -->
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
