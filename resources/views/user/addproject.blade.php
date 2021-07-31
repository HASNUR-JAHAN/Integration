@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text">
               <h3 style=" text-align: center;">Add Your Valuable Project Here !!</h3>
            </div>
         </div>
      </div>
   </div>
</div>

<!--================Project Area =================-->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text">

               <h5 class="anu" style="margin-top: 50px;"><a href="/addproject">ADD NEW PROJECT</a></h5>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 posts-list">

            @if(Session::has('project_added'))
            <div class="alert alert-success" role="alert">
               {{ Session::get('project_added') }}
            </div>
            @endif
            <div class="comment-form">
               <form action="{{route('createProject')}}" class="form-contact comment_form" method="POST" id="commentForm" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="col-12">

                        <h4>Project Category</h4>
                        <div class="form-group">
                           <select class="form-control" name="category_id">
                              <option value="">Select project Category</option>
                              @foreach( $project_categories as $project_category)
                              <option value="{{$project_category->id}}">{{$project_category->name}}</option>
                              @endforeach
                           </select>

                        </div>

                        <h4>Project Title</h4>
                        <div class="form-group">
                           <input class="form-control" name="name" type="text" placeholder="Write Your Project Title Here">
                        </div>

                        <h4>Project Description</h4>
                        <div class="form-group">
                           <textarea class="form-control w-100" name="description" cols="30" rows="9" placeholder="Write Your Project Description Here"></textarea>
                        </div>

                        <h4>Project live/Github link</h4>
                        <div class="form-group">
                           <input class="form-control" name="projectlink" type="text" placeholder="Share your Project live/Github link">
                        </div>

                        <h4>Project Image</h4>
                        <div class="form-group">
                           <input class="form-control" name="image" type="file" placeholder="Share Your project home page UI">
                        </div>
                        
                        <h4>Project Documentation</h4>
                        <div class="form-group">
                           <input class="form-control" name="" type="file" placeholder="Share Your project document here">
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