@extends('front.layouts.master')
@section('content')
    <section class="page-title" style="background-image:url({{ asset( 'assets/front') }}/images/background/34.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Contact</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home </a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
	
   	<!--Contact Info Section-->
    <section class="contact-info-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            
            	<!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-block">
                    	<div class="icon-box wow zoomIn">
                        	<span class="icon fa fa-map-marker"></span>
                        </div>
                        <div class="text">184 Collins Street West <br> Victoria, United States, 8007</div>
                    </div>
                </div>
                
                <!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-block">
                    	<div class="icon-box wow zoomIn" data-wow-delay="300ms">
                        	<span class="icon fa fa-phone"></span>
                        </div>
                        <div class="text">(1800) 123 4567 <br> (1800) 987 6543</div>
                    </div>
                </div>
                
                <!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-block">
                    	<div class="icon-box wow zoomIn" data-wow-delay="600ms">
                        	<span class="icon fa fa-envelope"></span>
                        </div>
                        <div class="text">info@incles.com <br> support@incles.com</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Contact Info Section-->
    
    <!-- Contact Info Section -->
    <section class="contact-form-section">
        <div class="outer-container clearfix">
        
            <!--Form Column-->
            <div class="form-column clearfix">
                <div class="inner-column">
					<h2>Leave a Reply</h2>
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!--Comment Form-->
                        <form method="post" action="" id="">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
                    <!--End Contact Form --> 
                    
                </div>
            </div>
            
            <!--Map-->
            <div class="map-column">
                <!--Map Canvas-->
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
            
        </div>
    </section>
@endsection

@section('script')
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{ asset( 'assets/front') }}/js/map-script.js"></script>
@endsection