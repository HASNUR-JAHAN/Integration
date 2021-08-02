@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>QUESTION DETAILS</h3>
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
   
   
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('frontend/img/white-box-testing.jpg')}}" alt="">
                  </div>
                                                        
                  <div class="d-flex align-items-center">
                    <h3>   
                         <a href="/profile">Author: Hasnur Jahan</a>
                    </h3>
                 </div>
                 <h5>December 4, 2017 at 3:12 pm </h5>  
                             
          
                  <div class="blog_details" name="questiondetails">
                     <h2>What is testing?</h2>
                                      
                                         
                    
                     <h3>Provided Link</h3>
                     <div class="quote-wrapper">
                        <div class="quotes" name="projectlink">
                           
                        </div>
                     </div>
                     
                     <h3>Provided Documentation
                     </h3>
                     <div class="quote-wrapper">
                        <div class="quotes" name="projectdocument">
                           
                        </div>
                     </div>
                     
                  </div>
                 
                  
               </div>
               
              
              <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="3"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                       
                        
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
              
               <div class="comments-area">
                  <h4>03 Comments</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="{{asset('frontend/img/comment/comment_1.png')}}" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                              White Box Testing is software testing technique in which internal structure, design and coding of software are tested to verify flow of input-output and to improve design, usability and security. In white box testing, code is visible to testers so it is also called Clear box testing, Open box testing, Transparent box testing, Code-based testing and Glass box testing.
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
                              White-box testing (also known as clear box testing, glass box testing, transparent box testing, and structural testing) is a method of software testing that tests internal structures or workings of an application, as opposed to its functionality (i.e. black-box testing). In white-box testing an internal perspective of the system, as well as programming skills, are used to design test cases. The tester chooses inputs to exercise paths through the code and determine the expected outputs. 
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
                              If we go by the definition, “White box testing” (also known as clear, glass box or structural testing) is a testing technique which evaluates the code and the internal structure of a program.

White box testing involves looking at the structure of the code. When you know the internal structure of a product, tests can be conducted to ensure that the internal operations performed according to the specification. And all internal components have been adequately exercised. 
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
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/white-box-testing.jpg')}}" style="height:50%; width:50%;" alt="post">
                        <div class="media-body">
                           <a href="/blogdetails">
                              <h3>What is white box testing?</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="{{asset('frontend/img/What-is-Machine-Learning.jpg')}}" style="height:50%; width:50%;" alt="post">
                        <div class="media-body">
                           <a href="/blogdetails">
                              <h3>What is mechine learning?</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>

                     
                  </aside>

               </div>
            </div>
            
            
         </div>
      </div>
   </section>
   @endsection