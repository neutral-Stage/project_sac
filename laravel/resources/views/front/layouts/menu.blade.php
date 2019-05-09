<div class="nav-outer clearfix">
    <!-- Main Menu -->
    <nav class="main-menu">
        <div class="navbar-header">
            <!-- Toggle Button -->      
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
        <div class="navbar-collapse collapse clearfix">
            <ul class="navigation clearfix">
                <li class="@if(isset($current)) {{ 'current' }} @endif" ><a href="{{ route( 'home') }}"><i class="fa fa-home fa-2x"></i></a>
                <li class="dropdown"><a href="{{ route( 'home') }}">Home</a>
                    <ul>
                        <li><a href="{{ route( 'history') }}">History</a></li>
                        <li><a href="{{ route( 'mission') }}">Mission/Vision</a></li>
                        <li><a href="{{ route( 'values') }}">Values</a></li>
                        <li><a href="{{ route( 'board') }}">Board Members</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">Sacrifice Choir</a>
                    <ul>
                        <li><a href="">Data</a></li>
                        <li><a href="">Volunteerly Involved</a></li>
                        <li><a href="">Upcoming Event</a></li>
                        <li><a href="">Testimony</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">SOW</a>
                    <ul>
                        <li><a href="">School of Worship</a></li>
                        <li class="dropdown" ><a href="">Impact Story(Video)</a>
                            <ul>
                                <li><a href="">India</a></li>
                                <li><a href="">Bangladesh</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="">WME Course</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">Creative Arts</a>
                    <ul>
                        <li><a href="">Live Drama</a></li>
                        <li><a href="">TTC Training</a></li>
                        <li><a href="">CASE Seminar</a></li>
                    </ul>
                </li>
                <li class="dropdown @if(isset($pro)) {{ 'current' }} @endif"><a href="#">PM Music</a>
                    <ul>
                        <li ><a href="{{ route('product.all') }}">Products</a></li>
                        <li><a href="{{ route('advartise.all') }}">Advartise</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="">Impact Nation</a>
                    <ul>
                        <li><a href="">NPWC</a></li>
                        <li><a href="">RT</a></li>
                        <li><a href="">GCEC</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">LFU</a>
                    <ul>
                        <li><a href="">Blanket</a></li>
                        <li><a href="">Flood</a></li>
                        <li><a href="">Children Service</a></li>
                    </ul>
                </li>
                
                <li class="@if(isset($contact)) {{ 'current' }} @endif"><a href="{{ route( 'contact') }}">Contact</a></li>
                <li><a class="btn bg-white" href="">Become a Volunteer</a></li>
            </ul>
        </div>
    </nav>
    <!-- Main Menu End-->

            <!-- Outer Box -->
            {{-- <div class="outer-box">
                <ul class="social-icon-one">
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
<!--End Header Upper-->

<!-- Sticky Header -->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="{{ route( 'home') }}" title=""><img width="50" src="{{ asset( 'assets/front') }}/images/sac-small.png" alt="" title=""></a>
        </div>
        <!--Right Col-->
        <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                <li class="@if(isset($current)) {{ 'current' }} @endif" ><a href="{{ route( 'home') }}"><i class="fa fa-home fa-2x"></i></a>
                <li class="dropdown"><a href="{{ route( 'home') }}">Home</a>
                    <ul>
                        <li><a href="">History</a></li>
                        <li><a href="">Mission/Vision</a></li>
                        <li><a href="">Values</a></li>
                        <li><a href="">Board Members</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">Sacrifice Choir</a>
                    <ul>
                        <li><a href="">Data</a></li>
                        <li><a href="">Volunteerly Involved</a></li>
                        <li><a href="">Upcoming Event</a></li>
                        <li><a href="">Testimony</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">SOW</a>
                    <ul>
                        <li><a href="">School of Worship</a></li>
                        <li class="dropdown" ><a href="">Impact Story(Video)</a>
                            <ul>
                                <li><a href="">India</a></li>
                                <li><a href="">Bangladesh</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="">WME Course</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">Creative Arts</a>
                    <ul>
                        <li><a href="">Live Drama</a></li>
                        <li><a href="">TTC Training</a></li>
                        <li><a href="">CASE Seminar</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">PM Music</a>
                    <ul>
                        <li><a href="">Products</a></li>
                        <li><a href="">Advartise</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">Impact Nation</a>
                    <ul>
                        <li><a href="">NPWC</a></li>
                        <li><a href="">RT</a></li>
                        <li><a href="">GCEC</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route( 'home') }}">LFU</a>
                    <ul>
                        <li><a href="">Blanket</a></li>
                        <li><a href="">Flood</a></li>
                        <li><a href="">Children Service</a></li>
                    </ul>
                </li>
                
                <li><a href="{{ asset( 'assets/front') }}/contact.html">Contact</a></li>
                <li><a class="btn bg-white" href="">Become a Volunteer</a></li>
            </ul>
                </div>
            </nav><!-- Main Menu End-->
        </div>
    </div>
</div>