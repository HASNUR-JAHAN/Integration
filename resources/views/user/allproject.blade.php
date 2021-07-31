@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3 style="text-align: center;">All Category Projects</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">

                    <h5 class="anu"><a href="/addproject">ADD NEW PROJECT</a></h5>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- bradcam_area_end  -->


<!--================Project Area =================-->
<div class="container">
           
           
           <div class="row">
               <div class="col-lg-12">
                   <div class="section_title text-center">
                       <h2>Check out these great side projects, from podcasts and blogs to inventions and small businesses—and use them as inspiration for your own project idea.
</h2>
                   </div>
               </div>
           </div>
          
       </div>

       
<section class="blog_area section-padding">
    <div class="container">


        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">

                                @foreach ($projects as $project)
                                <div class="col-lg-6 col-md-6">
                                    
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ URL::to($project->image) }}" style="height:150px; width:100%;" alt="">
                                        </div>
                                        <br>
                                        <div class="program__content">
                                            <span>Category: Web Application</span>
                                            <h4> {{ $project->name }}</h4>
                                            <p>{{ substr(strip_tags($project->description), 0, 50) }} ....</p>
                                            
                                            <a href="{{ URL::to('/view/project/'.$project->id) }}" class="boxed-btn5">View Details</a>
                                            <br> <br>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Side Bar-->
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                        </form>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="/allproject" class="d-flex">
                                    <p>Web Application</p>
                                    <p>(20)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/allproject" class="d-flex">
                                    <p>Android Application</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/allproject" class="d-flex">
                                    <p>Mechine Learning</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/allproject" class="d-flex">
                                    <p>Artificial Intelligence</p>
                                    <p>(20)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/allproject" class="d-flex">
                                    <p>Others</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/allproject" class="d-flex">
                                    <p>Robotics</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="/allproject" class="d-flex">
                                    <p>Cyber Security</p>
                                    <p>(15)</p>
                                </a>
                            </li>
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                    
                        <h3 class="widget_title">Recent Post</h3>
                        @foreach ($projects as $project)
                        <div class="media post_item">
                            <img src="{{ URL::to($project->image) }}" style="height:50%; width:50%;" alt="post">
                            <div class="media-body">
                                <a href="/projectdetails">
                                    
                                    <h3>{{ substr(strip_tags($project->description), 0, 20) }}....</h3>

                                </a>
                                <p>January 12, 2019</p>
                            </div>

                        </div>
                        @endforeach

                    </aside>
                    
                </div>
            </div>

        </div>
    </div>
</section>
@endsection