@extends('front.layouts.master')
@section('content')
	<!-- Who We Are -->
    <section class="who-we-are">
        <div class="inner-container">
            <!-- Packeges Tabs -->
            <div class="services-tabs tabs-box clearfix">

                <ul class="tab-buttons">
                	<li class="text-center">Donation For  <span style="font-size: 25px">{{ $donated_for }}</span></li>
                    <li>
                    	<img src="{{ asset('assets/bKash.png') }}" alt="">
                    </li>
                </ul> 

                <!--Tabs Container-->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="service-1">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="sec-title">
                                    <h2>Process</h2>
                                    <div class="text">
                                    	<ul>
                                    		<li>ধাপ ১: ডায়াল *247#</li>
                                    		<li>ধাপ ২: অপশন বেছে নিনঃ “Payment”</li>
                                    		<li>ধাপ ৩: Marchant bKash Account নাম্বারটি লিখুনঃ 016xxxxxxxxx</li>
                                    		<li>ধাপ ৪: টাকার পরিমাণটি লিখুন</li>
                                    		<li>ধাপ ৫: রেফারেন্স নাম্বার হিসেবে ইনভয়েস নাম্বার দিব {{ $invoice }}</li>
                                    		<li>ধাপ ৬: পিন নাম্বার লিখুনঃ XXXX</li>
                                    		<li>ধাপ ৭: Payment সম্পন্ন হলে  Form পুরন করে Submit প্রেস করুন</li>
                                    	</ul>
                                    </div>
                                </div>

                                
                            </div>

                            <!-- Image Column -->
                            <div class="image-column" style="background-image: url({{ asset('front/assets')  }}/images/resource/tab-image-1.jpg);">
                            	<div style="width: 100%;" class="content-column">
                            	<div class="sec-title">
                                    <h4>Detail Form</h4>
                                    <div class="text">
                                    	<div class="subscribe-form">
							                <form method="post" action="{{ route('bkash.store') }}" enctype="multipart/form-data">@csrf
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
							                                <input type="text" name="phone" value="" placeholder="Enter Your bKash Phone Number" required="">
							                            </div>
							                            @error('phone')
							                                <div class="alert alert-danger">{{ $message }}</div>
							                            @enderror
							                        </div>
							                        <div class="col-md-12">
							                            <div class="form-group">
							                                <input type="text" name="amount" value="" placeholder="The Amount you donated" required="">
							                            </div>
							                            @error('amount')
							                                <div class="alert alert-danger">{{ $message }}</div>
							                            @enderror
							                        </div>
							                        <div class="col-md-12">
							                            <div class="form-group">
							                            	<textarea name="address" rows="4" placeholder="Address(Optional)"></textarea>
							                            </div>
							                            
							                        </div>
							                        <div class="col-md-12">
							                            <div class="form-group">
							                            	<input type="hidden" name="invoice" value="{{ $invoice }}">
							                            	<input type="hidden" name="donated_for" value="{{ $donated_for }}">
							                                <button type="submit" class="theme-btn btn-style-one">Submit</button>
							                            </div>
							                        </div>
							                    </div>
							                    
							                </form>
							            </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Who We Are -->
@endsection