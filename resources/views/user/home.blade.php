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
                    <h1>PROJECS</h1>
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
                                <span class="badge bandge_2">Category: Web Application</span>
                            </div>
                            <div class="news_info">

                                <h4>{{ substr(strip_tags($project->name ), 0, 40) }} ..</h4>
                                <p>{{ substr(strip_tags($project->description ), 0, 50) }} ....</p>
                                
                                <p class="d-flex align-items-center">
                                    <span><i class="flaticon-calendar-1"></i> {{ $project->updated_at }}</span>
                                      
                                    <span> <i class="flaticon-comment"></i> 01 comments</span>
                                <div class="space" >
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
                        <a href="/allproject" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>
            <br>


        <!--Recent Blog area-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">

                        <h1>BLOGS</h1>
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
                                    <div class="space" >
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

                            <img src="{{asset('frontend/img/publication1.PNG')}}" style="height: 250px;width=100px;"  alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>FINTECH - in the context of Bangladesh</h4>

                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                            <div class="space" >
                                <a href="/publicationdetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/publication2.PNG')}}"style="height: 250px;width=100px;"   alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>Thousands displaced as floods hit Bangladesh Rohingya....</h4>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            <div class="space" >
                                <a href="/publicationdetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/publication3.PNG')}}" style="height: 250px;width=100px;"  alt="">

                            <span class="badge bandge_2">Author: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>Axiata seeks 66pc stake in Indonesia's Link Net</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                            <div class="space" >
                                <a href="/publicationdetails" class="boxed-btn5">View Details</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allpublication" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>

        </div>

        <br>
          
           <!--recent question area-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">

                        <h1>QUESTIONS</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/white-box-testing.jpg')}}" style="height: 250px;width=100px;" alt="">

                            <span class="badge bandge_2">Author: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>What is white box testing?</h4>

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

                            <img src="{{asset('frontend/img/What-is-Machine-Learning.jpg')}}" style="height: 250px;width=100px;" alt="">

                            <span class="badge bandge_2">Author: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>What is mechine learning?</h4>
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

                            <img src="{{asset('frontend/img/download.png')}}" style="height: 250px;width=100px;" alt="">

                            <span class="badge bandge_2">By: Hasnur Jahan</span>
                        </div>
                        <div class="news_info">

                            <h4>What is github?</h4>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allquestion" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>

        </div>

        <br>
<!--circular-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h1>CIRCULARS</h1>
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
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                            </p>
                            <div class="space" >
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
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>
                            </p>
                            <div class="space" >
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
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>
                            </p>
                            <div class="space" >
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