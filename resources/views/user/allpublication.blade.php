@extends('layouts.home')

@section('content')

<div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>PUBLICATIONS</h3>
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
<div class="recent_news_area section__padding">
    
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">

                        <h2>Publications make scientific information publically available, and allow the rest of the academic audience to evaluate the quality of the research..</h2>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-8">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/publication1.PNG')}}" style="height:30%;width:100%;!" alt="">

                            <span class="badge bandge_2">Author: Hasnur Jahan</span>
                        </div>
                        <div>

                            <h1>FINTECH - in the context of Bangladesh</h1>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span><p>

                            <div>
                                <a href="/publicationdetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/publication2.PNG')}}" style="height:30%;width:100%;!" alt="">

                            <span class="badge bandge_2">Author: Hasnur Jahan</span>
                        </div>
                        <div>

                            <h1>Thousands displaced as floods hit Bangladesh Rohingya camps</h1>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span><p>

                            <div>
                                <a href="/publicationdetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="single__news">
                        <div class="thumb">

                            <img src="{{asset('frontend/img/publication3.PNG')}}" style="height:30%;width:100%;!" alt="">

                            <span class="badge bandge_2">Author: Hasnur Jahan</span>
                        </div>
                        <div>

                            <h1>Axiata seeks 66pc stake in Indonesia's Link Net</h1>
                            </a>
                            <p class="d-flex align-items-center">
                                <span><i class="flaticon-calendar-1"></i> May 10, 2020</span><p>

                            <div>
                                <a href="/publicationdetails" class="boxed-btn5">View Details</a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12">
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

               </div>
            </div>

            
            </div>
        </div>

        </div>
        
        

    </div>
    
    
</div>



    <section class="blog_area section-padding">

    </section>


    
   
@endsection