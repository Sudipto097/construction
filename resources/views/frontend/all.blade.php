@extends('layouts.master_all')
@section('content')
    <?php
    $sidebar = DB::table('sidebar')
        ->where('status','=',1)
        ->get();
    foreach ($sidebar as $v_admin){?>
    <div id="hero-section" data-number="3"  data-image-1="{{URL::to($v_admin->image_1)}}"
         data-image-2="{{URL::to($v_admin->image_2)}}"
         data-image-3="{{URL::to($v_admin->image_3)}}" data-effect="fade">
        <div class="hero-content">
            <div class="hero-title">
                <h1>{{$v_admin->text_1}}.</h1>
                <h1>{{$v_admin->text_2}}.</h1>
                <h1>{{$v_admin->text_3}}.</h1>
            </div>
        </div>
{{--        <div class="links">--}}
{{--            <a class="wprt-button big rounded-3px" href="#">LEAR MORE</a>--}}
{{--            <a class="link" href="#">OUR FOLIO</a>--}}
{{--        </div>--}}

        <a class="arrow scroll-target" href="{{route('/')}}"></a>
    </div>
    <?php }?>

    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div class="site-content clearfix">
                <div id="inner-" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- Intro -->
                        <section class="wprt-section intro">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-4">
                                        <div class="service-item clearfix text-center">
                                            <div class="thumb"><img src="{{asset('/frontend/assets/img/services/4.jpg')}}" alt="image" /></div>
                                            <div class="service-item-wrap">
                                                <h3 class="title font-size-18"><a href="#">Construction Consultant</a></h3>
                                                <p class="desc">Sed sit amet sapien sit amet odio lobortis ullamcorper quis vel nisl. Nam blandit maximus tristique. Vivamus enim quam, tincidunt vel blandit eu, molestie eget arcu.</p>
{{--                                                <div class="link">--}}
{{--                                                    <a href="#" class="wprt-button small rounded-3px">READ MORE</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="service-item clearfix text-center">
                                            <div class="thumb"><img src="{{asset('/frontend/assets/img/services/5.jpg')}}" alt="image" /></div>
                                            <div class="service-item-wrap">
                                                <h3 class="title font-size-18"><a href="#">Resconstruction Services</a></h3>
                                                <p class="desc">Sed sit amet sapien sit amet odio lobortis ullamcorper quis vel nisl. Nam blandit maximus tristique. Vivamus enim quam, tincidunt vel blandit eu, molestie eget arcu.</p>
{{--                                                <div class="link">--}}
{{--                                                    <a href="#" class="wprt-button small rounded-3px">READ MORE</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="service-item clearfix text-center">
                                            <div class="thumb"><img src="{{asset('/frontend/assets/img/services/6.jpg')}}" alt="image" /></div>
                                            <div class="service-item-wrap">
                                                <h3 class="title font-size-18"><a href="#">Architectural Design</a></h3>
                                                <p class="desc">Sed sit amet sapien sit amet odio lobortis ullamcorper quis vel nisl. Nam blandit maximus tristique. Vivamus enim quam, tincidunt vel blandit eu, molestie eget.</p>
{{--                                                <div class="link">--}}
{{--                                                    <a href="#" class="wprt-button small rounded-3px">READ MORE</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- FACTS -->
                        <section id="facts" class="wprt-section parallax">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-3">
                                        <div class="wprt-counter text-center accent-type">
                                            <div class="number" data-speed="5000" data-to="1240" data-in-viewport="yes">1240</div>
                                            <div class="text">PROJECT COMPLETED</div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3">
                                        <div class="wprt-counter text-center accent-type has-plus">
                                            <div class="number" data-speed="5000" data-to="1750" data-in-viewport="yes">1750</div>
                                            <div class="text">HAPPY CLIENTS</div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3">
                                        <div class="wprt-counter text-center accent-type">
                                            <div class="number" data-speed="5000" data-to="984" data-in-viewport="yes">984</div>
                                            <div class="text">WORKERS EMPLOYED</div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3">
                                        <div class="wprt-counter text-center accent-type">
                                            <div class="number" data-speed="5000" data-to="96" data-in-viewport="yes">96</div>
                                            <div class="text">AWARDS WON</div>
                                        </div>
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="103" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- WORKS -->
                        <section id="works" class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>

                                        <h2 class="text-center margin-bottom-20">RECENT WORKS</h2>
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
                                    <div data-filter=".architecture" class="cbp-filter-item">
                                        <span>Architecture</span>
                                    </div>
                                    <div data-filter=".building" class="cbp-filter-item">
                                        <span>Building</span>
                                    </div>
                                    <div data-filter=".garden" class="cbp-filter-item">
                                        <span>Garden</span>
                                    </div>
                                    <div data-filter=".interior" class="cbp-filter-item">
                                        <span>Interior</span>
                                    </div>
                                    <div data-filter=".office" class="cbp-filter-item">
                                        <span>Office</span>
                                    </div>
                                    <div data-filter=".workspace" class="cbp-filter-item">
                                        <span>Workspace</span>
                                    </div>
                                </div><!-- /#project-filter -->

                                <div id="projects" class="cbp">
                                    <div class="cbp-item architecture interior workspace">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-zoe">
                                                        <img src="{{asset('/frontend/assets/img/projects/1.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/1-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item building office workspace">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-honey">
                                                        <img src="{{asset('/frontend/assets/img/projects/2.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/2-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item architecture garden interior">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-oscar">
                                                        <img src="{{asset('/frontend/assets/img/projects/3.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/3-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item building interior workspace">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-sadie">
                                                        <img src="{{asset('/frontend/assets/img/projects/4.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/4-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item garden office workspace">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-zoe">
                                                        <img src="{{asset('/frontend/assets/img/projects/5.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/5-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item architecture garden office">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-honey">
                                                        <img src="{{asset('/frontend/assets/img/projects/6.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/6-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item architecture garden office">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-oscar">
                                                        <img src="{{asset('/frontend/assets/img/projects/7.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/7-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item architecture garden office">
                                        <div class="project-item">
                                            <div class="inner">
                                                <div class="grid">
                                                    <figure class="effect-sadie">
                                                        <img src="{{asset('/frontend/assets/img/projects/8.jpg')}}" alt="image" />
                                                        <figcaption>
                                                            <div>
                                                                <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                                <p>Construction</p>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                                <a class="project-zoom cbp-lightbox" href="{{asset('/frontend/assets/img/projects/8-full.html')}}" data-title="LUXURY BUILDINGS">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!--/.cbp-item -->
                                </div><!-- /#projects -->
                            </div><!--/.wprt-project -->
                        </section>

                        <!-- OFFER -->
                        <!-- TESTIMONIALS -->
                        <section id="testimonials" class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                        <h2 class="text-center margin-bottom-20">WHAT OTHER SAY ABOUT US</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                        <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper ut arcu non placerat. Praesent nibh massa varius.</p>
                                        <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-testimonials style-2 has-bullets bullet-style-1 bullet50" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                            <div id="testimonials-wrap" class="cbp">
                                                @if($Other)
                                                @foreach($Other as $v_all)
                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img src="{{URL::to($v_all->image)}}" alt="image" /></div>
                                                            <h4 class="name">{{$v_all->name}}</h4>
                                                            <div class="position">{{$v_all->designation}}</div>
                                                            <blockquote class="whisper">
                                                                {{$v_all->small_text}}
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->
                                                @endforeach
                                                @endif
                                            </div><!-- /#service-wrap -->
                                        </div><!-- /.wprt-testimonials -->

                                        <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- WHY US-->
                        <section id="why-us" class="wprt-section">
                            <?php
                            $sidebar = DB::table('tbl_Why_Choose_Us')
                                ->where('status','=',1)
                                ->get();
                            foreach ($sidebar as $v_admin){?>
                            <div class="container-fluid no-padding">
                                <div class="row no-margin">
                                    <div class="col-md-6 no-padding">
                                        <img  src="{{URL::to($v_admin->image)}}" alt="image">
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 no-padding">
                                        <div class="wprt-content-box style-2">
                                            <h2 class="margin-bottom-20">WHY CHOOSE US?</h2>
                                            <div class="wprt-lines style-1 custom-2">
                                                <div class="line-1"></div>
                                            </div>
                                            <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>

                                            <div class="wprt-toggle bg-white style-1">
                                                <h3 class="toggle-title">{{$v_admin->question_1}}</h3>
                                                <div class="toggle-content">
                                                    {{$v_admin->answer_1}}
                                                </div>
                                            </div>

                                            <div class="wprt-toggle bg-white active style-1">
                                                <h3 class="toggle-title">{{$v_admin->question_2}}</h3>
                                                <div class="toggle-content">
                                                    {{$v_admin->answer_2}}
                                                </div>
                                            </div>

                                            <div class="wprt-toggle bg-white style-1">
                                                <h3 class="toggle-title">{{$v_admin->question_3}}</h3>
                                                <div class="toggle-content">
                                                    {{$v_admin->answer_3}}
                                                </div>
                                            </div>

                                            <div class="wprt-toggle bg-white style-1">
                                                <h3 class="toggle-title">{{$v_admin->question_4}}</h3>
                                                <div class="toggle-content">
                                                    {{$v_admin->answer_4}}
                                                </div>
                                            </div>
                                        </div><!-- /.wprt-content-box -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        <?php }?>
                        </section>

                        <!-- TEAM -->
                        <section id="team" class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                        <h2 class="text-center margin-bottom-20">OUR TEAM</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                        <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper ut arcu non placerat. Praesent nibh massa varius.</p>

                                        <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>

                                        <div class="wprt-team has-bullets bullet-style-1" data-layout="slider" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                            <div id="team-wrap" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/1.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">Richard Wagner</h4>
                                                                <div class="position">Civil Engineer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/2.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">Sarah Spence</h4>
                                                                <div class="position">Construction Assistant</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/3.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">John Halpern</h4>
                                                                <div class="position">Construction Manager</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/4.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">Tommy Atkins</h4>
                                                                <div class="position">Electricians</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/1.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">John Joe</h4>
                                                                <div class="position">Junior Architect</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/2.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">Richard Wagner</h4>
                                                                <div class="position">Civil Engineer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/3.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">Sarah Spence</h4>
                                                                <div class="position">Construction Assistant</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/4.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">John Halpern</h4>
                                                                <div class="position">Construction Manager</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cbp-item">
                                                    <div class="member">
                                                        <div class="inner">
                                                            <div class="image">
                                                                <div class="inner">
                                                                    <img src="{{asset('/frontend/assets/img/team/1.jpg')}}" alt="image" />
                                                                </div>
                                                            </div>
                                                            <div class="texts">
                                                                <h4 class="name">Tommy Atkins</h4>
                                                                <div class="position">Electricians</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /#team-wrap -->
                                        </div><!-- /.wprt-team -->
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="50" data-smobi="40"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                        <!-- PARTNERS -->
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>
    </div>
@endsection
