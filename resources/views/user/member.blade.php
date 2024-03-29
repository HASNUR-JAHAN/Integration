@extends('layouts.home')
@section('content')
<style>
    .single-team .inner {
        text-align: center;
        margin-bottom: 35px;
        border: 1px solid #e5eaf0;
        padding: 5px 5px 0px;
    }

    .single-team .inner .team-img {
        position: relative;
    }

    .single-team .inner .team-img img {
        width: 100%;
    }

    .single-team .inner .team-img::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .single-team .inner .team-img:hover::after {
        opacity: 0.4;
    }

    .single-team .inner .team-content {
        padding: 22px 0px 0px;
    }

    .single-team .inner .team-content h4 {
        font-size: 18px;
        font-weight: 400;
    }

    .single-team .inner .team-content h5 {
        font-weight: 300;
        font-size: 16px;
        letter-spacing: 0.5px;
        color: #7d91aa;
    }

    .single-team .inner .team-content a {
        display: inline-block;
        padding: 2px;
        margin: 0 3px;
        font-size: 16px;
    }

    .team-social {
        background: #f3f6fa;
        width: 50%;
        padding-top: 4px;
        margin: auto;
        border-radius: 15px 15px 0px 0px;
        margin-top: 17px;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="team-area sp">
    <div class="container">
        <br>
        <h4>Teacher</h4>
        <br>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Lecturer</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Lecturer</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Lecturer</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Lecturer</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h4>Student</h4>
        <br>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Student</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Student</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Student</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 single-team">
                <div class="inner">
                    <div class="team-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Member Photo">
                    </div>
                    <div class="team-content">
                        <h4>Virgie Perry</h4>
                        <h5>Student</h5>
                        <div class="team-social">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection