@extends('front.layouts.master')
@section('content')
     <!--Page Title-->
     {{--  <section class="page-title" style="background-image:url({{asset('assets/front')}}/images/background/17.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Events</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home </a></li>
                    <li>Events</li>
                </ul>
            </div>
        </div>
    </section>  --}}
    <!--End Page Title-->
    
    <!-- Comming Soon -->
      <section class="coming-soon" style="background-image: url({{asset('assets/front')}}/images/background/11.jpg);">
        <div class="auto-container">
            <!-- Title -->
            <div class="title">
                <h2>Next Event</h2>
                <div class="text">Experience god’s presence helping people who need it..</div>        
            </div>

            <!-- Countdown -->
            <div class="timer">
                <div class="cs-countdown" data-countdown="10/20/2019 05:06:59"></div>            
            </div>

            {{--  <div class="link-box">
                <a href="event-calendar.html" class="theme-btn btn-style-one">Calender</a>
                <a href="contact.html" class="theme-btn btn-style-two">Sign Up</a>
            </div>  --}}
        </div>
    </section>
    <!--End Comming Soon -->

    <!--Events Grid Section-->
    <section class="events-grid-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            
                <!-- Event Block Five -->
                <div class="event-block-five col-md-6 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box">
                            <span class="date">April  04</span>
                            <div class="image"><a href="event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-14.jpg" alt=""></a></div>                        
                        </div>
                        <div class="lower-box">
                            <div class="content-box">
                                <h4><a href="event-single.html">Let ‘s walk the poor children Education</a></h4>
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                    <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                                </ul>
                                <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architecturesCredibly reintermediate backend ideas for cross-platform models.</div>
                                <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-five">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Event Block Five -->
                <div class="event-block-five col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <span class="date">April  04</span>
                            <div class="image"><a href="event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-15.jpg" alt=""></a></div>                        
                        </div>
                        <div class="lower-box">
                            <div class="content-box">
                                <h4><a href="event-single.html">Food camp for childran in Africa</a></h4>
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                    <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                                </ul>
                                <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architecturesCredibly reintermediate backend ideas for cross-platform models.</div>
                                <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-five">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Event Block Five -->
                <div class="event-block-five col-md-6 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box">
                            <span class="date">April  04</span>
                            <div class="image"><a href="event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-16.jpg" alt=""></a></div>                        
                        </div>
                        <div class="lower-box">
                            <div class="content-box">
                                <h4><a href="event-single.html">Marathan 2019 Run For the Cancer people</a></h4>
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                    <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                                </ul>
                                <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architecturesCredibly reintermediate backend ideas for cross-platform models.</div>
                                <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-five">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Event Block Five -->
                <div class="event-block-five col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <span class="date">April  04</span>
                            <div class="image"><a href="event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-17.jpg" alt=""></a></div>                        
                        </div>
                        <div class="lower-box">
                            <div class="content-box">
                                <h4><a href="event-single.html">Let ‘s walk the poor children Education</a></h4>
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                    <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                                </ul>
                                <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architecturesCredibly reintermediate backend ideas for cross-platform models.</div>
                                <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-five">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Event Block Five -->
                <div class="event-block-five col-md-6 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box">
                            <span class="date">April  04</span>
                            <div class="image"><a href="event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-18.jpg" alt=""></a></div>                        
                        </div>
                        <div class="lower-box">
                            <div class="content-box">
                                <h4><a href="event-single.html">Help and Donate from poor children Education</a></h4>
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                    <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                                </ul>
                                <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architecturesCredibly reintermediate backend ideas for cross-platform models.</div>
                                <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-five">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Event Block Five -->
                <div class="event-block-five col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <span class="date">April  04</span>
                            <div class="image"><a href="event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-19.jpg" alt=""></a></div>                        
                        </div>
                        <div class="lower-box">
                            <div class="content-box">
                                <h4><a href="event-single.html">Let ‘s walk the poor children Education</a></h4>
                                <ul class="info">
                                    <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                                    <li><i class="fa fa-map-marker"></i> 25 Newyork City</li>
                                </ul>
                                <div class="text">Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architecturesCredibly reintermediate backend ideas for cross-platform models.</div>
                                <div class="link-box"><a href="event-single.html" class="theme-btn btn-style-five">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!--Styled Pagination-->
            <ul class="styled-pagination text-center">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>                
            <!--End Styled Pagination-->
            
        </div>
    </section>
    <!--End Event List View Section-->
@endsection