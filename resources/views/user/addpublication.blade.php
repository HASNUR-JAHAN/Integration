@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>ADD QUESTION</h3>
                  </div>
              </div>
          </div>
           <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                       
                        <h5 class="anu"><a href="/addpublication">ADD NEW PUBLICATION</a></h5>
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
                        <h3>Add Your Question Here!!</h3>
                    </div>
                </div>
            </div>
           
        </div>
   
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">
               
              
              
               
               <div class="comment-form">
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                         
                         <h4>Question Category</h4>
                          
                          <div class="form-group">
                              <input class="form-control" name="questioncategory" id="name" type="text" placeholder="Write Your QuestionCategory Here">
                           </div>
                     
                          
                          <h4>Question Details</h4>
                          <div class="form-group">
                              <textarea class="form-control w-100" name="questiondetails" id="comment" cols="30" rows="9"
                                 placeholder="Write Your Question Here"></textarea>
                           </div>
                          
                          <h4>Share Link</h4>
                           <div class="form-group">
                              <input class="form-control" name="bloglink" id="link" type="text" placeholder="Share Link Here">
                           </div>
                          
                          <h4>Share Image</h4>
                           <div class="form-group">
                              <textarea class="form-control w-100" name="blogcomment" id="comment" cols="30" rows="9"
                                 placeholder="Share Image Here"></textarea>
                                 <center><div class="form-group">
                                    <button type="submit" style="width: 1110px; background: white;">UPLOAD</button>
                                 </div></center>
                           </div>
                        </div>

                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">SUBMIT</button>
                     </div>
                  </form>
               </div>
            </div>

         </div>
      </div>
   </section>
   
@endsection