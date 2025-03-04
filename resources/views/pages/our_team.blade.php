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
        background-color: #4a235a;
        border-color: #4a235a;
        box-shadow: none;
        outline: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #4a235a;
        border-color: #4a235a;
    }

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #4a235a;
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
        <div class="auto-container"
            style="position: absolute; top: 70%; left: 30%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">
            <div class="content-box">
                <h1 style="color:#fff"><b>@lang('messages.our_team')</b></h1>
            </div>
        </div>
    </section>

    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">@lang('team.board_directors')</h5>
            <!-- ********************** row ********************** -->
            <div class="row">
                <!-- Team member Jeffry -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Jeffry Caballero.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title" style="margin-top:30px;">Jeffry Caballero</h4>
                                        <p class="card-text">@lang('team.president')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/images/team/Jeffry Caballero.jpg"
                                                    alt="card image"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Team member Luis-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Elizabeth Tamez.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title" style="margin-top:30px;">Elizabeth Tamez</h4>
                                        <p class="card-text">@lang('team.vice_president')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/images/team/Elizabeth Tamez.jpg"
                                                    alt="card image"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Team member Maria Amao-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Maria Amao.jpg" alt="card image">
                                        </p>
                                        <h4 class="card-title" style="margin-top:30px;">María A. Amao</h4>
                                        <p class="card-text">@lang('team.secretary')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <p><img class=" img-fluid" src="assets/images/team/Maria Amao.jpg" alt="card image">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Carlos Ramos.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title" style="margin-top:30px;">Carlos Ramos</h4>
                                        <p class="card-text">@lang('team.treasurer')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <p><img class=" img-fluid" src="assets/images/team/Carlos Ramos.jpg"
                                                alt="card image"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ********************** end row ********************** -->
            <!-- ********************** row ********************** -->
            <div class="row">
                <!-- Team member Peter -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Peter Rios.jpg" alt="card image">
                                        </p>
                                        <h4 class="card-title" style="margin-top:30px;">Peter Ríos</h4>
                                        <p class="card-text">@lang('team.vocal')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <p><img class=" img-fluid" src="assets/images/team/Peter Rios.jpg" alt="card image">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Team member Luis-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Aracelis Haye.jpg"
                                                alt="card image">
                                        </p>
                                        <h4 class="card-title" style="margin-top:30px;">Aracelis Haye</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/images/team/Aracelis Haye.jpg"
                                                    alt="card image"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Team member Maria Amao-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Richard Serrano.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title" style="margin-top:30px;">Richard Serrano</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <p><img class=" img-fluid" src="assets/images/team/Richard Serrano.jpg"
                                                alt="card image"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Danny Santiago.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title" style="margin-top:30px;">Danny Santiago</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <p><img class=" img-fluid" src="assets/images/team/Danny Santiago.jpg"
                                                alt="card image"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ********************** end row ********************** -->
            <!-- ********************** row ********************** -->
            <div class="row">
                <!-- Team member Peter -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Miguel Alvarez.jpg"
                                                alt="card image">
                                        </p>
                                        <h4 class="card-title" style="margin-top:30px;">Miguel Álvarez</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <p><img class=" img-fluid" src="assets/images/team/Miguel Alvarez.jpg"
                                                alt="card image">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Team member Luis-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Justo Gonzalez.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title" style="margin-top:30px;">Justo González</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/images/team/Justo Gonzalez.jpg"
                                                    alt="card image"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Team member Maria Amao-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Jessica Lugo.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title" style="margin-top:30px;">Jessica Lugo</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <p><img class=" img-fluid" src="assets/images/team/Jessica Lugo.jpg"
                                                alt="card image"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- Team member Luis-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Jose Daniel Montanez.jpg"
                                                alt="card image">
                                        </p>
                                        <h4 class="card-title" style="margin-top:30px;">José Daniel Montañez</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <p><img class=" img-fluid" src="assets/images/team/Jose Daniel Montanez.jpg"
                                                alt="card image">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ********************** end row ********************** -->
            <!-- ********************** row ********************** -->
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Daniel Ruarte.jpg"
                                                alt="card image">
                                        </p>
                                        <h4 class="card-title" style="margin-top:30px;">Daniel Ruarte</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <p><img class=" img-fluid" src="assets/images/team/Daniel Ruarte.jpg"
                                                alt="card image">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="assets/images/team/Wilmer Estrada.jpg"
                                                alt="card image">
                                        </p>
                                        <h4 class="card-title" style="margin-top:30px;">Wilmer Estrada</h4>
                                        <p class="card-text">@lang('team.member')</p>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card">
                                        <p><img class=" img-fluid" src="assets/images/team/Wilmer Estrada.jpg"
                                                alt="card image">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ********************** end row ********************** -->
        </div>
    </section>
    <section class="team-page-section centred">
        <div class="auto-container">
            <div class="auto-container">
                <div class="sec-title centred mb_55" style="text-align: center;">
                    <h2 style="color:#4a235a;">@lang('team.staff')</h2>
                </div>
            </div>
            <!-- ******************************************* row ******************* -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('jessica-lugo')}}"><img src="assets/images/team/Jessica Lugo.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('jessica-lugo')}}" style="color:#4a235a;"> Jessica Lugo</a></h3>
                                <span class="designation">@lang('team.executive_director')</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('glorie-acevedo')}}"><img src="assets/images/team/Glorie Acevedo.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('glorie-acevedo')}}" style="color:#4a235a;"> Glorie Acevedo</a></h3>
                                <span class="designation">@lang('team.office_business_manager')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('marta-luna')}}"><img src="assets/images/team/Marta Luna.jpg" alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('marta-luna')}}" style="color:#4a235a;"> Marta Luna</a></h3>
                                <span class="designation">@lang('team.community_engagement_manager')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ******************************************* row ******************* -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('luz-ortiz')}}"><img src="assets/images/team/Luz Ortiz.jpg" alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('luz-ortiz')}}" style="color:#4a235a;"> Luz Ortiz</a></h3>
                                <span class="designation">@lang('team.accounting_manager')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred mb_55" style="text-align: center;">
                    <h2 style="color:#4a235a;">@lang('team.consultants')</h2>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('oscar-merlo')}}"><img src="assets/images/team/Oscar Merlo.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('oscar-merlo')}}" style="color:#4a235a;"> Oscar Merlo</a></h3>
                                <span class="designation">@lang('team.compelling_preaching_program_manager')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('shaila-munoz')}}"><img src="assets/images/team/Shaila Munoz.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('shaila-munoz')}}" style="color:#4a235a;"> Shaila Muñoz</a></h3>
                                <span class="designation">@lang('team.fundraising_manager')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('coralys-santos')}}"><img src="assets/images/team/Coralys Santos.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('coralys-santos')}}" style="color:#4a235a;"> Coralys Santos</a></h3>
                                <span class="designation">@lang('team.assistant_manager_preaching_program')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="{{ route('jeremy-villoch')}}"><img src="assets/images/team/Jeremy Villoch.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="{{ route('jeremy-villoch')}}" style="color:#4a235a;"> Jeremy Villoch</a>
                                    </h3>
                                    <span class="designation">@lang('team.intern')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="{{ route('maylin-escala')}}"><img src="assets/images/team/Maylin Escala.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="{{ route('maylin-escala')}}" style="color:#4a235a;">Maylin Escala</a></h3>
                                    <span class="designation">@lang('team.young_leaders_program_manager')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="{{ route('yajaira-ruiz')}}"><img src="assets/images/team/Yajaira Ruiz.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="{{ route('yajaira-ruiz')}}" style="color:#4a235a;">Yajaira Ruiz</a></h3>
                                    <span class="designation">@lang('team.yajaira.p1')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred mb_55" style="text-align: center;">
                    <h2 style="color:#4a235a;">@lang('team.service_partners')</h2>
                </div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('ondina-gonzalez')}}"><img src="assets/images/team/Ondina Gonzalez.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('ondina-gonzalez')}}" style="color:#4a235a;"> Ondina González</a></h3>
                                <span class="designation">@lang('team.director_gonzalez_resource_center')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('wilson-fernandes-junior')}}"><img
                                        src="assets/images/team/Wilson Fernandes.jpg" alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('wilson-fernandes-junior')}}" style="color:#4a235a;">Wilson Fernandes
                                        Junior</a></h3>
                                <span class="designation">@lang('team.it_solutions_software_developer')</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ******************************************* row ******************* -->
            <div class="auto-container">
                <div class="sec-title centred mb_55" style="text-align: center;">
                    <h2 style="color:#4a235a;">@lang('team.interns')</h2>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('sophia-porter')}}"><img src="assets/images/team/Sophia Porter.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('sophia-porter')}}" style="color:#4a235a;">Sophia Porter</a></h3>
                                <span class="designation">@lang('team.gonzalez_center_practitioner')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('yaheli-vargas')}}"><img src="assets/images/team/Yaheli Vargas.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('yaheli-vargas')}}" style="color:#4a235a;"> Yaheli Vargas</a></h3>
                                <span class="designation">@lang('team.content_curator_intern')</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ route('juan-martinez')}}"><img src="assets/images/team/Juan Martinez.jpg"
                                        alt=""></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="{{ route('juan-martinez')}}" style="color:#4a235a;"> Juan Martínez</a></h3>
                                <span class="designation">@lang('team.juan.p1')</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>


@endsection
