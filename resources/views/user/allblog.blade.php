@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>All Category Blog</h3>
                    </div>
                </div>
            </div>
            
        
                 
           
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                       
                        <h5 class="anu"><a href="{{route('addblog')}}">ADD NEW BLOG</a></h5>
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
                        <h3>BLOG</h3>
                    </div>
                </div>
            </div>
           
        </div>


    <section class="blog_area section-padding">
        <div class="container">
                   
         
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                       
                       <div class="col-lg-12">
                    <div class="section text-center">
                        <h1 class="pb-5">Posts</h1>
                    </div>
                </div>
           
             <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="{{ URL::to($blog->image) }}" style="height: 150px;width:50;" alt="">
                                    
                                </div>
                            <br>
                                <div class="program__content">
                                    <span>category: {{ $blog->blogcategory }}</span>
                                    <h4> {{ $blog->blogname }}</h4>
                                    <p>{{ substr(strip_tags($blog->blogdetails), 0, 50) }} ....
                                        <!-- {{ strlen(strip_tags($blog->blogdetails)) > 20 ? "...ReadMore" : "" }}  -->
                                    </p>
                                    <a href="{{ URL::to('/view/blog/'.$blog->id) }}" class="boxed-btn5">View Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
                      <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/allblog" class="boxed-btn4">View All</a>
                    </div>
                </div>
            </div>
                     
   
                   
                    </div>
                </div>
                 <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="/oneblog" class="d-flex">
                              <p>Website</p>
                              <p>(10)</p>
                           </a>
                        </li>
                       
                          
                        <li>
                           <a href="/oneblog" class="d-flex">
                              <p>Artificial Intelligence</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="/oneblog" class="d-flex">
                              <p>Others</p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/post/post_1.png')}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/post/post_2.png')}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                    
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/post/post_4.png')}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Asteroids telescope</h3>
                           </a>
                           <p>01 Hours ago</p>
                        </div>
                     </div>
                  </aside>

               </div>
            </div>

                
                
                
            </div>
        </div>
    </section>
   
@endsection