@extends('front.layouts.master')
@section('content')
 <!--Page Title-->
    <section class="page-title" style="background-image:url( {{asset('assets/front') }}/images/arts/back.JPG);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Live Drama</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home </a></li>
                    <li>Live Drama</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

   <!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Gallery</h2>
        </div>

        <div class="row clearfix">
            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/1.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/1.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/2.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/2.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/3.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/3.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/4.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/4.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/5.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/5.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="700ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/6.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/6.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="900ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/7.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/7.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/8.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/8.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="link-box">
            <a href="{{asset('assets/front')}}/gallery.html" class="theme-btn btn-style-four">More Gallery</a>
        </div>
    </div>
</section>
<!-- End Gallery Section -->



<!-- Video Section -->
 <section class="video-section-two" style="background-image: url({{asset('assets/front')}}/images/arts/video.JPG);">
    <div class="inner-box">
        <div class="content-box">
            <h4> Welcom to Live Drama Program </h4>
            <a href="{{asset('assets/front')}}/https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="video" data-caption=""><span class="icon fa fa-play"></span></a>
        </div>
    </div>
</section>
<!-- End Video Section -->
@endsection