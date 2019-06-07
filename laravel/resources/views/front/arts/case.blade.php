@extends('front.layouts.master')
@section('content')
 <!--Page Title-->
    <section class="page-title" style="background-image:url( {{asset('assets/front') }}/images/arts/case.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>CASE</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home </a></li>
                    <li>CASE</li>
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
                            <h2>Creative Arts and Scriptural Engagement (CASE)</h2>
                            <div class="text" style="font-size: 20px;line-height: 2;">CASE is our new concept for motivating people for Creative Arts. It’s a whole day seminar for the Churches and Organizations where we teach and facilitate about the engagement of Creative Arts and Scripture. It is an exceptional seminar because it is not common in our country. It is not a new concept but seeing things differently. Sometimes people think that they don’t sing, dance or do drama so we don’t need this training but it is not like that. Anyone can do this seminar. </div>
                        </div>

                        
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn">
                        <figure><img src="{{ asset( 'assets/front') }}/images/home/slider-2.JPG" alt=""></figure>
                    </div>
                </div>

            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>We have 3 objectives for this training:</h2>
                            <div class="text">1.	Knowing the Biblical foundation of art and creativity: God is an artist. He is the founder of every creativeness. He gave us 3 types of intellect.
                            <div class="sac">
                                <ul>
                                    <li>•	Logical intelligence.</li>
                                    <li>•	Imaginative intelligence.</li>
                                    <li>•	Emotional intelligence.</li>
                                </ul>
                            </div>
                            In this seminar we get to know about the biblical foundation of this intelligence and how to apply it.
                            </div>
                        </div>

                        <div class="text">2.	Finding the materials and observe in reality: Sometimes we complain that we want to work but we don’t have the materials. This training will let you know about those ingredients which are around us and biblical teaching of using it.
                            
                        </div>
                        <div class="text">3.	Using and implementing arts: Lastly, we will get to know about the implementation of arts.
                        </div>
                       
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn">
                        <figure><img src="{{ asset( 'assets/front') }}/images/arts/three.jpg" alt=""></figure>
                    </div>
                </div>

            

               <!--  Info Column -->
                
    </section>
    
@endsection