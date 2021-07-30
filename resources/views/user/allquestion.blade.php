  
@extends('layouts.home')

@section('content')

<!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>QUESTIONS</h3>
                    </div>
                </div>
            </div>
            
          
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text"> 
                        <h5 class="anu"><a href="/addquestion">ADD NEW QUESTION</a></h5>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
  <div class="container">      
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2>Do the question in your mind and get your questions answer!!</h2>
                    </div>
                </div>
            </div>
           
        </div>


    <section class="recent_news_area section__padding">
    <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/1.png')}}" alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>Those Other College Expenses You
                                Aren’t Thinking About</h4>

                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                            <div class="space" >
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/1.png')}}" alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>Those Other College Expenses You
                                Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            <div class="space" >
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/2.png')}}" alt="">

                            <span class="badge bandge_2">By: dhjjsxjsajkkjjmjjkjkjk</span>
                        </div>
                        <div class="news_info">

                            <h4>Those Other College Expenses You
                                Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                            <div class="space" >
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

        <br>
    </section>
    @endsection