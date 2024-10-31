@extends('layouts.app')

@section('title', '#somosAETH | Our Team') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 

<style>
    /* FontAwesome for working BootSnippet :> */

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    #team {
        background: #eee !important;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #330033;
        border-color: #330033;
        box-shadow: none;
        outline: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #330033;
        border-color: #330033;
    }

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #330033;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 312px;
    }

    .backside .card a {
        font-size: 18px;
        color: 330033 !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: 330033 !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }
</style>

<!-- Content here -->

@section('content') 
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/gallery/team.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>@lang('messages.our_team')</h1>
        </div>
    </div>
</section>

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/team/JessicaLugo.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Dr. Jessica Lugo</h4>
                                    <p class="card-text">Executive Director</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm" style="background-color: #330033;border-color:#330033"><i
                                            class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Dr. Jessica Lugo</h4>
                                    <p class="card-text">Thissdsdsdsd is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                    <!--     <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                                href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/team/JustoGonzalez.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Dr. Justo González</h4>
                                    <p class="card-text">Executive Director</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm" style="background-color: #330033;border-color:#330033"><i
                                    class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Dr. Jessica Lugo</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/team/OndinaGonzalez.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Dr. Ondina González</h4>
                                    <p class="card-text">Executive Director</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm" style="background-color: #330033;border-color:#330033"><i
                                            class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title" style="margin-top:30px;">Dr. Jessica Lugo</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/team/WilsonFernandesJunior.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Wilson Fernandes Junior, MSD</h4>
                                    <p class="card-text">Executive Director</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm" style="background-color: #330033;border-color:#330033"><i
                                            class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Dr. Jessica Lugo</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and
                                        button.This is basic card with image on top, title, description and button.This
                                        is basic card with image on top, title, description and button.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection