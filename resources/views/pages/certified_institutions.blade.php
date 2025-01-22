@extends('layouts.app')

@section('title', '#somosAETH | Certified Institutes')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'AETH, Bible`s Intitutes, introduction')

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

@section('content')

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h3"><i class="bi bi-building"></i>
            @lang('programs.institute_directory')</h5>
        <!-- ********************** row ********************** -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid"
                                            src="assets/images/gallery/Hispanic-Bible-School-Logo-.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Hispanic Bible School (HBS)</h4>
                                    <p class="card-text">Dr. Elimelec Cordero</p>
                                    <p><a href="https://www.seminariobiblicohispano.org" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.seminariobiblicohispano.org"
                                                target="blank">seminariobiblicohispano.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (773) 385-8364</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 7029 W. Grand Avenue
                                        </p>
                                        <p style="margin-top:15px">Chicago, IL 60707-2107</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/Juan.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Juan Figueroa Umpierre, ICDC Puerto
                                        Rico</h4>
                                    <p class="card-text">Rev. Luis Felipe Ramos</p>
                                    <p><a href="https://www.discipulospr.org" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.discipulospr.org"
                                                target="blank">www.discipulospr.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (787) 799-7878</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> Carr. 167 1990 Marginal
                                        </p>
                                        <p style="margin-top:15px">Flamingo Terrace, Bayamón, PR 00957</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/chet.png"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Hispanic Center for Theological
                                        Studies (CHET)</h4>
                                    <p class="card-text">Dr. Magdalena Sánchez</p>
                                    <p><a href="https://www.chet.org" target="blank" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.chet.org" target="blank"> www.chet.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (424) 785-5880</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 1005 E. Palmer
                                            St.,Compton, CA 90221 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ********************** row ********************** -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/asbury.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Asbury Theological Seminary</h4>
                                    <p class="card-text">Timothy C. Tennent</p>
                                    <p><a href="https://www.asburyseminary.edu" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.asburyseminary.edu"
                                                target="blank">www.asburyseminary.edu</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (954) 257-0079</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 203 N. Lexington Ave,
                                            Wilmore, KY 40390</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/centro.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Center for Latin Studies</h4>
                                    <p class="card-text"> Dr. R. Lamar Vest</p>
                                    <p><a href="https://www.centroparaestudioslatinos.net/" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.centroparaestudioslatinos.org"
                                                target="blank">www.centroparaestudioslatinos.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (423) 478-1131</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> Carr. 167 1990 Marginal
                                        </p>
                                        <p style="margin-top:15px"> 900 Walker St. N. E., Cleveland, TN 37311

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/diocese.png"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Diocese of San Bernardino Ministry
                                        Formation Institute</h4>
                                    <p class="card-text">Dr. Amanda Alexander,</p>
                                    <p><a href="https://www.mfisbdiocese.org" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.mfisbdiocese.org" target="blank">
                                                www.mfisbdiocese.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (909) 475-5387</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 1201 E. Highland
                                            Avenue, San Bernardino, CA 92404</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/ini.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">International Bible Institute of
                                        Texas (IBIT)</h4>
                                    <p class="card-text">Dr. Stephen Austin</p>
                                    <p><a href="https://www.ibitibi.org" target="blank" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.ibitibi.org" target="blank">www.ibitibi.org</a></b>
                                        </p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (713) 910-2819

                                        </p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 1502 Avenue I. South
                                            Houston, TX 77587

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/harbor.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;"> Harbor Genesis Christian College
                                        (HGCC)</h4>
                                    <p class="card-text"> Dr. Jeffry Caballero</p>
                                    <p><a href="https://www.harborgenesiscc.org" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.harborgenesiscc.org"
                                                target="blank">www.harborgenesiscc.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (310) 957-2984</p>
                                        <p style="margin-top:15px"> 500 North State College Boulevard, Suite 1100
                                            Orange, CA, 9286</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/unilimi.png"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">University of Leadership and
                                        Ministry (UNILIMI)</h4>
                                    <p class="card-text">Dr. Wilfredo Estrada Adorno</p>
                                    <p><a href="https://www.unilimi.org" target="blank" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.unilimi.org" target="blank">
                                                www.unilimi.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (919) 803-3262</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 94 Technology Drive,
                                            Garner, NC 27529</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/echam.png"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;"> ECHAM Theological University</h4>
                                    <p class="card-text"> Dr. Danny Santiago Torres</p>
                                    <p><a href="https://www.utecham.org" target="blank" class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.utecham.org" target="blank">www.utecham.org</a></b>
                                        </p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (787) 912-8088</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 58 Calle De la Cruz,
                                            Rio Grande, PR 00745</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/espiritu.jpg"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;"> Spirit and Life Seminar, Church of
                                        God of Prophecy</h4>
                                    <p class="card-text"> Dr. Michael Hernandez</p>
                                    <p><a href="https://www.seminarioespirituyvida.org" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.seminarioespirituyvida.org"
                                                target="blank">www.seminarioespirituyvida.org</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (423) 559-5515</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 3800 Keith St NW,
                                            Cleveland TN 37312</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/images/gallery/institutes/revelation.png"
                                            alt="card image"></p>
                                    <h4 class="card-title" style="margin-top:30px;">Revelation University</h4>
                                    <p class="card-text"> Dr. Narciso Montas</p>
                                    <p><a href="https://www.revelationuniversity.us" target="blank"
                                            class="btn btn-primary btn-sm"
                                            style="background-color: #4a235a;border-color:#4a235a"><i
                                                class="fa fa-plus"></i></a></p>

                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p style="margin-top:15px"><i class="bi bi-globe"></i> <a
                                                href="https://www.revelationuniversity.us" target="blank">
                                                www.revelationuniversity.us</a></b></p>
                                        <p style="margin-top:15px"><i class="bi bi-telephone"></i> (305) 969-9448</p>
                                        <p style="margin-top:15px"><i class="bi bi-geo-alt"></i> 10658 SW 186th St,
                                            Miami, FL 33157</p>
                                    </div>
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
