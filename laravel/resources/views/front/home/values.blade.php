@extends('front.layouts.master')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url( {{asset('assets/front') }}/images/background/13.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Core Values</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home </a></li>
                    <li>Core Values</li>
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
                            <h2>Core Values</h2>
                            <div class="text"><p>Core values are the fundamental beliefs of a person or organization. Core values also help ministry to determine if they are on the right path and fulfilling their goals by creating an unwavering guide.</p> <br>
                                <p>The core values of an organization are those values we hold which form the foundation on which we perform work and conduct ourselves.   
Core values are not descriptions of the work we do or the strategies we employ to accomplish our mission.</p> 
<br> 
<p>The values underlie our work, how interact with each other, and which strategies we employ to fulfill our mission.  The core values are the basic elements of how we go about our work.  
Sacrifice Ministry holds its 9 core values. These values are based on our ministry name ‘Sacrifice’. Our Core values are influenced by the word of God.</p> 


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
                            <!-- Feature BLock -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="sac">
                                   <ul>
                                       <li ><h3>S <span class="fa fa-angle-double-right fa-1x"></span> Service for Christ as a team. (1 Pet 4:10)</h3></li>
                                       <li><h3>A <span class="fa fa-angle-double-right fa-1x"></span> Attempt for excellence. (Col 3:23-24)</h3></li>
                                       <li><h3>C <span class="fa fa-angle-double-right fa-1x"></span> Christ-centered leadership & discipleship. (Mark 10:45)</h3></li>
                                       <li><h3>R <span class="fa fa-angle-double-right fa-1x"></span> Remain culturally relevant. (1Cor 9:22-23)</h3></li>
                                       <li><h3>I <span class="fa fa-angle-double-right fa-1x"></span> Intimacy with God and people. (Rom 12:1-2)</h3></li>
                                       <li><h3>F <span class="fa fa-angle-double-right fa-1x"></span> Financial integrity. (Prov 13:11)</h3></li>
                                       <li><h3>I <span class="fa fa-angle-double-right fa-1x"></span> Implementation of stewardship. (James 1:17)</h3></li>
                                       <li><h3>C <span class="fa fa-angle-double-right fa-1x"></span> Church and community partnership. (1Cor 3:9)</h3></li>
                                       <li><h3>E <span class="fa fa-angle-double-right fa-1x"></span> Engage with world evangelism and missions. (Math 28:19-20)</h3></li>
                                   </ul>                                 
 
                                </div>
                            </div>

                           
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Become Volunteer -->

    

        
@endsection