@extends('front.layouts.master')
@section('content')
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

            <div class="link-box">
                <a href="event-calendar.html" class="theme-btn btn-style-one">Calender</a>
                <a href="contact.html" class="theme-btn btn-style-two">Sign Up</a>
            </div>
        </div>
    </section>
    <!--End Comming Soon -->

    <!-- Testimonial Section -->
    <section class="testimonial-section-five">
        <div class="auto-container">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block-five">
                    <div class="inner-box">
                        <div class="thumb"><img src="{{asset('assets/front')}}/images/resource/thumb-8.jpg" alt=""></div>
                        <div class="info">
                            <h4 class="name">Amanda Stephens</h4>
                            <span class="designation">Donator</span>
                        </div>
                        <div class="text">Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable.</div>
                        <ul class="social-links">
                           <li><a href="#"><i class="fa fa-facebook-square"></i></a></li> 
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li> 
                           <li><a href="#"><i class="fa fa-twitter-square"></i></a></li> 
                           <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li> 
                        </ul>
                    </div> 
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block-five">
                    <div class="inner-box">
                        <div class="thumb"><img src="{{asset('assets/front')}}/images/resource/thumb-9.jpg" alt=""></div>
                        <div class="info">
                            <h4 class="name">Nattasha</h4>
                            <span class="designation">Donator</span>
                        </div> 
                        <div class="text">Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable.</div>
                        <ul class="social-links">
                           <li><a href="#"><i class="fa fa-facebook-square"></i></a></li> 
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li> 
                           <li><a href="#"><i class="fa fa-twitter-square"></i></a></li> 
                           <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li> 
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section-two">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h2>Latest News</h2>
            </div>

            <div class="row clearfix">
                <!-- News Block Three -->
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="info-box">
                            <span class="date">22  May 2019</span>
                            <h3><a href="blog-single-2.html">Let’s Help the Endangered Species Today</a></h3>
                            <ul class="info">
                                <li>By New Admin</li>
                                <li><span>23</span> Likes</li>
                                <li><span>12</span> Comments</li>
                            </ul>
                        </div>
                        <div class="image-box">
                            <div class="image"><a href="blog-single-2.html"><img src="{{asset('assets/front')}}/images/resource/news-2.jpg" alt=""></a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Phosfluorescently expedite impactful supply chains via focused results. Holistically generate open-source applications through </div>
                            <div class="link-box"><a href="blog-single-2.html">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="info-box">
                            <span class="date">22  May 2019</span>
                            <h3><a href="blog-single-2.html">We  All Must be Saving the Animals</a></h3>
                            <ul class="info">
                                <li>By New Admin</li>
                                <li><span>23</span> Likes</li>
                                <li><span>12</span> Comments</li>
                            </ul>
                        </div>
                        <div class="image-box">
                            <div class="image"><a href="blog-single-2.html"><img src="{{asset('assets/front')}}/images/resource/news-3.jpg" alt=""></a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Phosfluorescently expedite impactful supply chains via focused results. Holistically generate open-source applications through </div>
                            <div class="link-box"><a href="blog-single-2.html">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="info-box">
                            <span class="date">22  May 2019</span>
                            <h3><a href="blog-single-2.html">Make the world greennest</a></h3>
                            <ul class="info">
                                <li>By New Admin</li>
                                <li><span>23</span> Likes</li>
                                <li><span>12</span> Comments</li>
                            </ul>
                        </div>
                        <div class="image-box">
                            <div class="image"><a href="blog-single-2.html"><img src="{{asset('assets/front')}}/images/resource/news-4.jpg" alt=""></a></div>
                        </div>
                        <div class="lower-content">
                            <div class="text">Phosfluorescently expedite impactful supply chains via focused results. Holistically generate open-source applications through </div>
                            <div class="link-box"><a href="blog-single-2.html">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Donation Form Two -->
    <section class="donation-form-two">
        <div class="auto-container">

            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-md-12 col-sm-12 col-xs-12">
                    <!-- Donation Form -->
                    <div class="donation-form style-two middle-aligned">
                        <form  method="post" action="http://t.commonsupport.com/incles/index-2.html">
                            <div class="row clearfix">
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <input type="radio" name="one-time" id="one-time">
                                    <label for="one-time">One Time</label>
                                    <input type="radio" name="one-time" id="recurring">
                                    <label for="recurring">Recurring</label>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <h4>I Want to Donate for</h4>
                                    <select class="custom-select-box">
                                        <option>Educated Childrens</option>
                                        <option>Educated Childrens</option>
                                        <option>Educated Childrens</option>
                                        <option>Educated Childrens</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <h4>Currency</h4>
                                    <select class="custom-select-box">
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <h4>How much do you want to donate?</h4>
                                    <select class="custom-select-box">
                                        <option>$1200</option>
                                        <option>$1000</option>
                                        <option>$800</option>
                                        <option>$500</option>
                                        <option>$100</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12 btn-box">
                                    <button type="submit" class="theme-btn btn-style-two">Donate Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Donation Form -->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url({{asset('assets/front')}}/images/background/12.jpg);">
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span>Contact Us Now !</span>
                <h2>+ 12 123 456 789</h2>
            </div>

            <div class="btn-column pull-right">
                <a href="contact.html" class="theme-btn btn-style-three">Get In Touch</a>
            </div>
        </div>
    </section>
    <!--End Call To Action -->
	
@endsection