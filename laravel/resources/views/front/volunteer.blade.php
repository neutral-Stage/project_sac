@extends('front.layouts.master')
    @if(session()->has('message'))
        <div class="alert alert-danger">{{ Session::get('message') }}</div>
    @endif
@section('content')
    <!--Main Slider-->
     <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>
                	
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('assets/front')}}/images/main-slider/image-2.jpg"> 
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['600','600','600','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-150','-150','-150','-180']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4 class="text-center">Become a Volunteer</h4>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['650','650','650','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-50','-50','-50','-80']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 class="text-center">Be Our Community</h2>
                        </div>
						
						<div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['600','600','600','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['60','60','60','60']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text text-center">Must explain to you how all this mistaken idea of denouncing pleasure & praising, Join over 24 million people supporting charity and personal causes.</div>
                        </div>
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['600','600','600','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['160','160','190','190']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<div class="text-center">
								<a href="about.html" class="theme-btn btn-style-one"><span>Know More</span></a>
								<a href="content.html" class="theme-btn btn-style-two"><span>Donate Now</span></a>
							</div>
                        </div>
                    </li>
					
                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-10.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('assets/front')}}/images/main-slider/image-10.jpg"> 
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['600','600','600','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-150','-150','-150','-180']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4 class="text-center">We Try To Help People</h4>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['650','650','650','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-50','-50','-50','-80']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 class="text-center">With Volunteering</h2>
                        </div>
						
						<div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['600','600','600','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['60','60','60','60']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text text-center">Must explain to you how all this mistaken idea of denouncing pleasure & praising, Join over 24 million people supporting charity and personal causes.</div>
                        </div>
                        
                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="auto"
                        data-whitespace="normal"
                        data-fontsize="['64','40','36','24']"
                        data-width="['600','600','600','500']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['160','160','190','190']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<div class="text-center">
								<a href="about.html" class="theme-btn btn-style-one"><span>Know More</span></a>
								<a href="content.html" class="theme-btn btn-style-two"><span>Donate Now</span></a>
							</div>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

     <!--Fun Facts Section-->
     <div class="fun-fact-section push-up">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-support"></span>
                                <span class="count-text" data-speed="3000" data-stop="156">0</span>
                                <span class="counter-title">Successful Projects</span>
                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-charity-3"></span>
                                <span class="count-text" data-speed="3000" data-stop="1256">0</span>
                                <span class="counter-title">People Impacted</span>
                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-donation-2"></span>
                                <span class="count-text" data-speed="3000" data-stop="176">0</span>
                                <span class="counter-title">Money Donated</span>
                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-mother"></span>
                                <span class="count-text" data-speed="3000" data-stop="2564">0</span>
                                <span class="counter-title">Total Volunteers</span>
                                <div class="text">Activity to beta test. Override the digital divide with </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->

<!-- Subscribe Section -->
    <section class="subscribe-section" style="margin-top: 30px; background-image: url({{asset('assets/front')}}/images/background/4.jpg);">

        <div class="auto-container">
            <div class="title">
                <h2>Register As A Volunteer</h2>
                <div class="text">Integer et diam libero. Praesent  varius nisi. Nunc vCapitalize on low hanging fruit to identify a ballpark<br> value added activity to beta test. Override.</div>
            </div>
            <div class="subscribe-form">
                <form method="post" action="{{ route('volunteer.singup') }}" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" value="" placeholder="Enter Your Full Name" required="">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="phone" value="" placeholder="Enter Your Phone Number" required="">
                            </div>
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-inline">
                                <label for="">Select Your Image</label>
                                <input type="file" name="photo">
                            </div>
                            @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="form-group">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->
    <!-- Become Volunteer -->
    <section class="become-volunteer">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Become A Volunteer</h2>
                            <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail.  management inside of workflows to establish a framework. Taking seamless key performance</div>
                        </div>

                        <div class="row clearfix">
                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-pay"></span></div>
                                    <h3><a href="causes-single.html">Make Donation</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-system"></span></div>
                                    <h3><a href="causes-single.html">Give Scholarship</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                    <h3><a href="causes-single.html">Become a Volunteer</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-teamwork"></span></div>
                                    <h3><a href="causes-single.html">Support our People</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeInUp" data-wow-delay="600ms">
                        <figure><img src="{{asset('assets/front')}}/images/resource/image-3.jpg" alt=""></figure>
                    </div>
                </div>

                <!-- Info Column -->
                
            </div>
        </div>
    </section>
    <!--End Become Volunteer -->

    

    <!-- Team Section -->
    <section class="team-section">
        <div class="title-box" style="background-image: url({{asset('assets/front')}}/images/background/5.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <h2>Our Volounteers</h2>
                </div>
            </div>
        </div>
        <div class="team-box">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Team Block -->
                    <div class="team-block col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box"><a href="team-single.html"><img src="{{asset('assets/front')}}/images/resource/volunteer-1.jpg" alt=""></a></div>
                            <div class="info-box">
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                </ul>
                                <h4 class="name"><a href="team-single.html">John Smith</a></h4>
                                <span class="designation">Donator</span>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="team-single.html"><img src="{{asset('assets/front')}}/images/resource/volunteer-2.jpg" alt=""></a></div>
                            <div class="info-box">
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                </ul>
                                <h4 class="name"><a href="team-single.html">Nattasha</a></h4>
                                <span class="designation">Donator</span>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image-box"><a href="team-single.html"><img src="{{asset('assets/front')}}/images/resource/volunteer-3.jpg" alt=""></a></div>
                            <div class="info-box">
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                </ul>
                                <h4 class="name"><a href="team-single.html">Mick chwla</a></h4>
                                <span class="designation">Donator</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <h3 class="name">Amanda Stephens</h3>
                        <div class="text">“ Capitalize on low hanging fruit to identify a ballpark value added  to beta test. override strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world v”</div>
                        <span class="sign"><img src="{{asset('assets/front')}}/images/resource/sign-2.png" alt=""></span>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <h3 class="name">Amanda Stephens</h3>
                        <div class="text">“ Capitalize on low hanging fruit to identify a ballpark value added  to beta test. override strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world v”</div>
                        <span class="sign"><img src="{{asset('assets/front')}}/images/resource/sign-2.png" alt=""></span>
                    </div>
                </div>

                <!-- Testimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <h3 class="name">Amanda Stephens</h3>
                        <div class="text">“ Capitalize on low hanging fruit to identify a ballpark value added  to beta test. override strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world v”</div>
                        <span class="sign"><img src="{{asset('assets/front')}}/images/resource/sign-2.png" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection