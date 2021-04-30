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
                            <div id="gmap" class="wprt-map-1"></div>
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
                                        <p>68 Havemeyer St, Brooklyn, NY 11211<br> United States</p>

                                        <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                        <h5>Phone number</h5>
                                        <p>+1 718-955-2838 or +1 718-955-3290</p>

                                        <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                        <h5>E-mail address</h5>
                                        <p>contact@construction.com</p>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="10" data-smobi="10"></div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-8">
                                        <form class="wprt-contact-form" method="post" action="http://vprowand.com/html5/construction/demo/includes/contact/contact-process.php">
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
                                                        <input type="submit" value="SEND MESSAGE" id="submit" name="submit" class="submit">
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
