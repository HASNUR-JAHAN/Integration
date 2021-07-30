@extends('layouts.home')

@section('content')

<div class="slider_area">
    <div class="slider_active owl-carousel">

        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>Boost up your skills <br>
                                with a new way of <br>
                                learning.</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single_slider  d-flex align-items-center slider_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>Boost up your skills <br>
                                with a new way of <br>
                                learning.</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>Boost up your skills <br>
                                with a new way of <br>
                                learning.</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="recent_news_area section__padding">
    <!--Recent Blog area-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h1>All Project</h1>
                </div>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    @foreach ($projects as $project)
                    <div class="col-md-4">
                        <div class="single__news">
                            <div class="thumb">

                                <img src="{{ URL::to($project->image) }}" style="height: 250px;width=100px;" alt="">
                                
                            </div>
                            <div class="news_info">

                                <h4>{{ $project->name }}</h4>
                                <p>{{ $project->description }}
                                </p>
                                <p class="d-flex align-items-center">
                                    <span><i class="flaticon-calendar-1"></i> {{ $project->updated_at }}</span>

                                    <span> <i class="flaticon-comment"></i> 01 comments</span>
                                <div class="space" style="padding-left: 20px">
                                    <a href="{{ URL::to('/view/project/'.$project->id) }}" class="boxed-btn5">View Details</a>
                                </div>
                                </p>

                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allblog" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>
            <br>


        <!--Recent Blog area-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">

                        <h1>BLOG</h1>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach ($blogs as $blog)

                        <div class="col-md-4">
                            <div class="single__news">
                                <div class="thumb">

                                    <img src="{{ URL::to($blog->image) }}" style="height: 250px;width=100px;" alt="">
                                    <span class="badge bandge_2">Category: {{ $blog->blogcategory }}</span>
                                </div>
                                <div class="news_info">

                                    <h4>{{ $blog->blogname }}</h4>
                                    <p>{{ substr(strip_tags($blog->blogdetails), 0, 50) }} ....
                                        <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                                    </p>
                                    <p class="d-flex align-items-center">
                                        <span><i class="flaticon-calendar-1"></i> {{ $blog->updated_at }}</span>

                                        <span> <i class="flaticon-comment"></i> 01 comments</span>
                                    <div class="space" style="padding-left: 20px">
                                        <a href="{{ URL::to('/view/blog/'.$blog->id) }}" class="boxed-btn5">View Details</a>
                                    </div>
                                    </p>

                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allblog" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>

        </div>
        <br>

       
       
       <!-- recent papers area-->
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">

                        <h1>PUBLICATIONS</h1>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/1.png')}}" alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div>

                            <h4 class="para">Those Other College Expenses You
                                Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span><p>

                            <div>
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/1.png')}}" alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div>

                            <h4 class="para">Those Other College Expenses You
                                Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span><p>

                            <div>
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/1.png')}}" alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div>

                            <h4 class="para">Those Other College Expenses You
                                Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span><p>

                            <div>
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allquestion" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>

        </div>

        <br>
        
         <!--recent papers area end-->
          
           <!--recent question area-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">

                        <h1>QUESTION</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/1.png')}}" alt="">

                            <span class="badge bandge_2">Group Study</span>
                        </div>
                        <div class="news_info">

                            <h4>Those Other College Expenses You
                                Aren’t Thinking About</h4>

                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                            <div class="space" style="padding-left: 20px">
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/news/1.png')}}" alt="">

                            <span class="badge bandge_2">Group Study</span>
                        </div>
                        <div class="news_info">

                            <h4>Those Other College Expenses You
                                Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            <div class="space" style="padding-left: 20px">
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

                            <span class="badge bandge_2">Hall Life</span>
                        </div>
                        <div class="news_info">

                            <h4>Those Other College Expenses You
                                Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                            <div class="space" style="padding-left: 20px">
                                <a href="/questiondetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allquestion" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>

        </div>

        <br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">

                        <h1>CIRCULAR</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single__news">

                        <div class="news_info">

                            <h4>
                                <div class="single__program">

                                    <div class="program__content">

                                        <span>Manager - Internal Audit (OPCA)</span>
                                        <h4>Organization for the Poor Community Advancement (OPCA)</h4>

                                    </div>
                                </div>
                            </h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> December 10, 2020</span>

                            </p>
                            <div class="space" style="padding-left: 20px">
                                <a href="/circulardetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">

                        <div class="news_info">

                            <h4>
                                <div class="single__program">

                                    <div class="program__content">

                                        <span>Manager - Internal Audit (OPCA)</span>
                                        <h4>Organization for the Poor Community Advancement (OPCA)</h4>

                                    </div>
                                </div>
                            </h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> 10, 2020</span>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i>December 10, 2020</span>

                            </p>
                            <div class="space" style="padding-left: 20px">
                                <a href="/circulardetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">


                        <div class="news_info">

                            <h4>
                                <div class="single__program">

                                    <div class="program__content">

                                        <span>Manager - Internal Audit (OPCA)</span>
                                        <h4>Organization for the Poor Community Advancement (OPCA)</h4>

                                    </div>
                                </div>
                            </h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> December</span>

                            </p>
                            <div class="space" style="padding-left: 20px">
                                <a href="/circulardetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allcircular" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>

        </div>

        <br>


    </div>



    @endsection