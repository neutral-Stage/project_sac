@extends('front.layouts.master')
@section('content')
	<!-- Donation Form Section -->
    <section class="donation-form-section style-two">
        <div class="auto-container">
            <!-- Donation Form -->
            <div class="donation-form">
                @if(session()->has('name'))
                    <h3>Thanks, {{ Session::get('name') }} !!</h3> <br>
                    <h3>We've received your donation confarmation for '{{ Session::get('type') }}'  of amount {{ Session::get('amount') }}!! We will contact with you soon!!</h3> <hr>
                @endif
                <form  method="post" action="{{ route('donation.method') }}">@csrf
                    <div class="row clearfix">

                        <div class="form-group col-md-3 col-sm-12 col-xs-12">
                            <h4>I Want to Donate for</h4>
                            <select name="donated_for" class="custom-select-box">
                                <option value="Choir">Choir</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <h4>Your Payment Method</h4>
                            <select name="method" class="custom-select-box">
                            	<option value="">--</option>
                            	<option value="bKash">bKash</option>
                                <option value="Roket">Roket</option>
                                {{-- <option>USD , Us dollers</option>
                                <option>USD , Us dollers</option>
                                <option>USD , Us dollers</option>
                                <option>USD , Us dollers</option> --}}
                            </select>
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <h4>Currency</h4>
                            <select name="currency" class="custom-select-box">
                                <option value="">--</option>
                                <option value="BDT">BDT , Bangladeshi Taka</option>
                                
                                {{-- <option>$1000</option>
                                <option>$500</option>
                                <option>$100</option> --}}
                            </select>
                        </div>

                        <div class="form-group col-md-2 col-sm-12 col-xs-12 btn-box">
                            <button type="submit" class="theme-btn btn-style-two">Next</button>
                        </div>
                            
                    </div>
                </form>
                @if(isset($errors))
                	@if(count($errors) > 0)
                    <div class="alert alert-danger">
                		@foreach ($errors->all() as $message)
                       	 {{ '*' }} {{$message}}
                		@endforeach
                    </div>
                    @endif
                @endif
            </div>
        </div>
    </section>
    <!--En Donation Form Section -->

    <div class="fun-fact-section-two" style="background-image: url({{ asset('assets/front')  }}/images/background/7.jpg);">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                            <div class="inner">
                                <div class="count-box counted">
                                    <span class="icon flaticon-heart-12"></span>
                                    <span class="count-text" data-speed="3000" data-stop="156">156</span>
                                    <span class="counter-title">Successful Projects</span>
                                    <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                            <div class="inner">
                                <div class="count-box counted">
                                    <span class="icon flaticon-give-love"></span>
                                    <span class="count-text" data-speed="3000" data-stop="1256">1256</span>
                                    <span class="counter-title">People Impacted</span>
                                    <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                            <div class="inner">
                                <div class="count-box counted">
                                    <span class="icon flaticon-make-a-donation"></span>
                                    <span class="count-text" data-speed="3000" data-stop="176">176</span>
                                    <span class="counter-title">Money Donated</span>
                                    <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column-two col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                            <div class="inner">
                                <div class="count-box counted">
                                    <span class="icon flaticon-solidarity-3"></span>
                                    <span class="count-text" data-speed="3000" data-stop="2564">2564</span>
                                    <span class="counter-title">Total Volunteers</span>
                                    <div class="text">Activity to beta test. Override the digital divide with additional clickthroughs from sodales,</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection