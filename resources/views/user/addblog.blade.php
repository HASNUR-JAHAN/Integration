@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>ADD BLOG</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">

                    <h5 class="anu"><a href="/addblog">ADD NEW BLOG</a></h5>
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
                <h3>Add Your Valuable Blog Here!!</h3>
            </div>
        </div>
    </div>

</div>

<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">

                @if(Session::has('blog_added'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('blog_added') }}
                </div>
                @endif


                <div class="comment-form">
                    <form action="{{route('addimage')}}" class="form-contact comment_form" method="POST" id="commentForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">

                                <h4>Blog Category</h4>

                                <div class="form-group">
                                    <input class="form-control" name="blogcategory" type="text" placeholder="Write Your Blog Category Here">

                                </div>

                                <!-- <div class="form-group">
                        <select name="blogcategory">
                            <option value="24" selected>Product 1</option>
                            <option value="32">Product 2</option>
                            <option value="54">Product 3</option>
                        </select> 
                        </div> -->


                                <h4>Blog Name</h4>
                                <div class="form-group">
                                    <input class="form-control" name="blogname" type="text" placeholder="Write Your Blog Name Hrere">
                                </div>

                                <h4>Blog Details</h4>
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="blogdetails" cols="30" rows="9" placeholder="Write Your Blog Details Here"></textarea>
                                </div>

                                <h4>Share Link</h4>
                                <div class="form-group">
                                    <input class="form-control" name="bloglink" type="text" placeholder="Share Link Here">
                                </div>

                                <h4>Share Image</h4>
                                <div class="form-group">
                                    <input class="form-control" name="image" type="file" placeholder="Share Link Here">
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