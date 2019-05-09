@extends('front.layouts.master')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url( {{asset('assets/front') }}/images/background/13.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Mission / Vision</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home </a></li>
                    <li>Mission / Vision</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Become Volunteer -->
    <section class="become-volunteer alternate">
        <div class="auto-container">
            

                <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Our Mission</h2>
                            <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail.  management inside of workflows to establish a framework. Taking seamless key performance</div>
                        </div>

                        <div class="row clearfix">
                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-pay"></span></div>
                                    <h3><a href="department.html">Make Donation</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-system"></span></div>
                                    <h3><a href="department.html">Give Scholarship</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                    <h3><a href="department.html">Become a Volunteer</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-teamwork"></span></div>
                                    <h3><a href="department.html">Support our People</a></h3>
                                    <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn">
                        <figure><img src="{{ asset( 'assets/front') }}/images/resource/image-7.png" alt=""></figure>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-md-12 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!-- Work Block -->
                        <div class="work-block-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <h4><a href="causes-single.html">Give Donation</a></h4>
                                <div class="text">Objectively innovate empowered tured products whereas parallel</div>
                            </div>
                        </div>

                        <!-- Work Block -->
                        <div class="work-block-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <h4><a href="causes-single.html">Give Scholarship</a></h4>
                                <div class="text">Objectively innovate empowered tured products whereas parallel</div>
                            </div>
                        </div>

                        <!-- Work Block -->
                        <div class="work-block-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <h4><a href="causes-single.html">Adopt a Child</a></h4>
                                <div class="text">Objectively innovate empowered tured products whereas parallel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Become Volunteer -->

    <!-- Team Section -->
    <section class="team-section-two">
        <div class="title-box" style="background-image: url({{ asset( 'assets/front') }}/images/background/8.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <h2>We Are Helping Hand</h2>
                </div>
                <div class="row clearfix">
                    <div class="title-colum col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h4>Now Need Your Help</h4>
                            <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your.</div>
                        </div>
                    </div>

                    <div class="form-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="subscribe-form">
                                <form method="post" action="http://t.commonsupport.com/incles/contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter Your Email" required="">
                                        <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Box -->
        <div class="team-box">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Team Block Two -->
                    <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="{{ asset( 'assets/front') }}/images/resource/team-1.jpg" alt=""></figure>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h4 class="name"><a href="team-single.html">Jane Mcallister</a></h4>
                                <span class="designation">Donater</span>
                                <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                                <div class="link-box">
                                    <a href="team-single.html"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block Two -->
                    <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="{{ asset( 'assets/front') }}/images/resource/team-2.jpg" alt=""></figure>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h4 class="name"><a href="team-single.html">Sandy Nattasha</a></h4>
                                <span class="designation">Founder</span>
                                <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                                <div class="link-box">
                                    <a href="team-single.html"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block Two -->
                    <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="{{ asset( 'assets/front') }}/images/resource/team-3.jpg" alt=""></figure>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h4 class="name"><a href="team-single.html">John Dou</a></h4>
                                <span class="designation">Manager</span>
                                <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                                <div class="link-box">
                                    <a href="team-single.html"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block Two -->
                    <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="{{ asset( 'assets/front') }}/images/resource/team-4.jpg" alt=""></figure>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h4 class="name"><a href="team-single.html">Boom Morly</a></h4>
                                <span class="designation">Donater</span>
                                <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                                <div class="link-box">
                                    <a href="team-single.html"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!--Fun Facts Section-->
    <div class="fun-fact-section-two style-two" style="background-image: url({{ asset( 'assets/front') }}/images/background/7.jpg);">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-heart-12"></span>
                                <span class="count-text" data-speed="3000" data-stop="156">0</span>
                                <span class="counter-title">Successful Projects</span>
                                <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-give-love"></span>
                                <span class="count-text" data-speed="3000" data-stop="1256">0</span>
                                <span class="counter-title">People Impacted</span>
                                <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-make-a-donation"></span>
                                $<span class="count-text" data-speed="3000" data-stop="176">0</span>
                                <span class="counter-title">Money Donated</span>
                                <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                        <div class="inner">
                            <div class="count-box">
                                <span class="icon flaticon-solidarity-3"></span>
                                <span class="count-text" data-speed="3000" data-stop="2564">0</span>
                                <span class="counter-title">Total Volunteers</span>
                                <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->

        <!-- Who We Are -->
    <section class="who-we-are">
        <div class="inner-container">
            <!-- Packeges Tabs -->
            <div class="services-tabs tabs-box clearfix">

                <ul class="tab-buttons">
                    <li data-tab="#service-1" class="tab-btn "><i class="fa fa-angle-right"></i> About Our Fund</li>
                    <li data-tab="#service-2" class="tab-btn "><i class="fa fa-angle-right"></i> Fund Collection</li>
                    <li data-tab="#service-3" class="tab-btn active-btn"><i class="fa fa-angle-right"></i> Education Needed</li>
                    <li data-tab="#service-4" class="tab-btn "><i class="fa fa-angle-right"></i> Food Needed</li>
                    <li data-tab="#service-5" class="tab-btn "><i class="fa fa-angle-right"></i> Non Profit</li>
                </ul> 

                <!--Tabs Container-->
                <div class="tabs-content">
                    <!--Tab -->
                    <div class="tab" id="service-1">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="sec-title">
                                    <h2>About Our Fund</h2>
                                    <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your.</div>
                                </div>

                                <div class="services"> 
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-pay"></span></div>
                                            <h3><a href="department.html">Make Donation</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                            <h3><a href="department.html">Become a Volunteer</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-system"></span></div>
                                            <h3><a href="department.html">Give Scholarship</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column" style="background-image: url({{ asset( 'assets/front') }}/images/resource/tab-image-3.jpg);">
                                <div class="image"><img src="{{ asset( 'assets/front') }}/images/resource/tab-image-3.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="service-2">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="sec-title">
                                    <h2>Fund Collection</h2>
                                    <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your.</div>
                                </div>

                                <div class="services"> 
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-pay"></span></div>
                                            <h3><a href="department.html">Make Donation</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                            <h3><a href="department.html">Become a Volunteer</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-system"></span></div>
                                            <h3><a href="department.html">Give Scholarship</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column" style="background-image: url({{ asset( 'assets/front') }}/images/resource/tab-image-2.jpg);">
                                <div class="image"><img src="{{ asset( 'assets/front') }}/images/resource/tab-image-2.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <!--Tab -->
                    <div class="tab active-tab" id="service-3">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="sec-title">
                                    <h2>Education Needed</h2>
                                    <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your.</div>
                                </div>

                                <div class="services"> 
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-pay"></span></div>
                                            <h3><a href="department.html">Make Donation</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                            <h3><a href="department.html">Become a Volunteer</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-system"></span></div>
                                            <h3><a href="department.html">Give Scholarship</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column" style="background-image: url({{ asset( 'assets/front') }}/images/resource/tab-image-1.jpg);">
                                <div class="image"><img src="{{ asset( 'assets/front') }}/images/resource/tab-image-1.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="service-4">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="sec-title">
                                    <h2>Food Needed</h2>
                                    <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your.</div>
                                </div>

                                <div class="services"> 
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-pay"></span></div>
                                            <h3><a href="department.html">Make Donation</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                            <h3><a href="department.html">Become a Volunteer</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-system"></span></div>
                                            <h3><a href="department.html">Give Scholarship</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column" style="background-image: url({{ asset( 'assets/front') }}/images/resource/tab-image-4.jpg);">
                                <div class="image"><img src="{{ asset( 'assets/front') }}/images/resource/tab-image-4.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="service-5">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="sec-title">
                                    <h2>Non Profit</h2>
                                    <div class="text">Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your.</div>
                                </div>

                                <div class="services"> 
                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-pay"></span></div>
                                            <h3><a href="department.html">Make Donation</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                            <h3><a href="department.html">Become a Volunteer</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>

                                    <div class="service-block-two">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-system"></span></div>
                                            <h3><a href="department.html">Give Scholarship</a></h3>
                                            <div class="text">Keeping your eye on the ball while performing a deep dive on the up mentality to derive</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column" style="background-image: url({{ asset( 'assets/front') }}/images/resource/tab-image-5.jpg);">
                                <div class="image"><img src="{{ asset( 'assets/front') }}/images/resource/tab-image-5.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Who We Are -->
@endsection