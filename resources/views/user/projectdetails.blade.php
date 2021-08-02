@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text">
               <h3>PROJECT DETAILS</h3>
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

<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section text-center">
                        <h2>CATEGORY</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center" name="blogcategory">
                        <h3>Web Application</h3>
                    </div>
                </div>
            </div>
</div>


<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 posts-list">
            <div class="single-post">
               <div class="feature-img" name="blogimage">
                  <img class="img-fluid" src="{{ URL::to($Project->image) }}" alt="">

               </div>

               <div class="d-flex align-items-center">
               <h3>   
                         <a href="/profile">Author: Hasnur Jahan</a>
               </h3>
                    
                 </div>
                
                  <h5 class="date">{{ $Project->updated_at }}</h5>
               </div>


               <div class="blog_details" name="blogname">
                  <h2>{{ $Project->name }}</h2></div>
               <div class="blog_details">
                  <p class="excert" name="blogdetails">
                     {{ $Project->description }}
                  </p>
               </div>
                  <h2>Provided Link</h2>
                  <div class="quote-wrapper">
                     <div class="quotes" name="bloglink">
                        {{ $Project->projectlink}}
                     </div>
                  </div>
               
            
           <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                     people like this
                  </p>
               </div>
            </div>
            <div class="comment-form">
               <h4>Leave a Reply</h4>
               <form class="form-contact comment_form" action="#" id="commentForm">
                  <div class="row">
                     <div class="col-12">
                        <div class="form-group">
                           <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="3" placeholder="Write Comment"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                  </div>
               </form>
            </div>

            <div class="comments-area">
               <h4>05 Comments</h4>
               <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                     <div class="user justify-content-between d-flex">
                        <div class="thumb">
                           <img src="{{asset('frontend/img/comment/comment_1.png')}}" alt="">
                        </div>
                        <div class="desc">
                           <p class="comment">
                              Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                              Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                           </p>
                           <div class="d-flex justify-content-between">
                              <div class="d-flex align-items-center">
                                 <h5>
                                    <a href="#">Emilly Blunt</a>
                                 </h5>
                                 <p class="date">December 4, 2017 at 3:12 pm </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                     <div class="user justify-content-between d-flex">
                        <div class="thumb">
                           <img src="{{asset('frontend/img/comment/comment_2.png')}}" alt="">
                        </div>
                        <div class="desc">
                           <p class="comment">
                              Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                              Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                           </p>
                           <div class="d-flex justify-content-between">
                              <div class="d-flex align-items-center">
                                 <h5>
                                    <a href="#">Emilly Blunt</a>
                                 </h5>
                                 <p class="date">December 4, 2017 at 3:12 pm </p>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                     <div class="user justify-content-between d-flex">
                        <div class="thumb">
                           <img src="{{asset('frontend/img/comment/comment_3.png')}}" alt="">
                        </div>
                        <div class="desc">
                           <p class="comment">
                              Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                              Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                           </p>
                           <div class="d-flex justify-content-between">
                              <div class="d-flex align-items-center">
                                 <h5>
                                    <a href="#">Emilly Blunt</a>
                                 </h5>
                                 <p class="date">December 4, 2017 at 3:12 pm </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      


      <div class="col-lg-3">
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
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/post/post_1.png')}}" alt="post">
                        <div class="media-body">
                           <a href="/blogdetails">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/post/post_2.png')}}" alt="post">
                        <div class="media-body">
                           <a href="/blogdetails">
                              <h3>The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/post/post_3.png')}}" alt="post">
                        <div class="media-body">
                           <a href="/blogdetails">
                              <h3>Astronomy Or Astrology</h3>
                           </a>
                           <p>03 Hours ago</p>
                        </div>
                     </div>
                     
                  </aside>

               </div>
            </div>
            
            
         </div>
      </div>
</div>
   </section>
   
@endsection