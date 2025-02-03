@extends('layouts.app')

@section('title', '#somosAETH | Certification Program')

@section('meta-description', 'Explore our mission to empower Hispanic communities through accessible and contextualized theological education. We foster leadership development, intergenerational engagement, and capacity building with workshops, mentorship, and resources. Join a network of scholars, students, and faith leaders dedicated to critical thinking, practical theology, and community transformation. Learn more about grants, subawards, and initiatives driving impactful change.')

@section('meta-keywords', 'somosAETH,mission, vision, theological education, theology, experts, Bible institutes, students, lay persons, accessible theological education, empower, certification, community, communities of practice, instructor education, leadership, capacity building, young, leaders, intergenerational, values, nonprofit, organization, Hispanic, Latino, Latine, Latinx, curriculum, contextualized, library resources, collaboration, relations, workshops, membership, network, study, reflection, practical theology, mentorship, publications, resources, evaluation, scholars, relevancy, critical thinking, initiatives, engagement, learning experiences, grant, subaward, proposal, application,misión, visión, educación teológica, teología, expertos, institutos bíblicos, estudiantes, laicos, educación teológica accesible, empoderamiento, certificación, comunidad, comunidades de práctica, formación de instructores, liderazgo, desarrollo de capacidades, jóvenes, líderes, intergeneracional, valores, sin fines de lucro, organización, hispano, latino, latinx, currículo, contextualizado, recursos de biblioteca, colaboración, relaciones, talleres, membresía, red, estudio, reflexión, teología práctica, tutoría, publicaciones, recursos, evaluación, académicos, relevancia, pensamiento crítico, iniciativas, compromiso, experiencias de aprendizaje, subvención, subvención, propuesta')


<!-- Content here -->

@section('content')
<section class="page-title centred">
    <div
        style="background-image: url(assets/images/gallery/cp-program.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
    </div>
    <div class="auto-container" style="position: relative; z-index: 2;">
        <div class="content-box">
            <h1 style="color:#b2b2b2">@lang('programs.cp.cp_title')</h1>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <img src="assets/images/cp_logo_white_transparent.png">
            <h2>@lang('programs.cp.developing')</h2><br>
        </div>
    </div>
</section>


<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_30 mt_19">
                    <figure class="image"><img src="assets/images/gallery/cp-what.png" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_two">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_55">
                            <h2>@lang('programs.cp.what')</h2>
                        </div>
                        <div class="text mb_40">
                            <div class="text">
                                <p>@lang('programs.cp.what_desc') </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-style-two pt_120" style="background-color:#f5f1fb">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box mr_30">
                        <div class="sec-title mb_55">
                            <h2>@lang('programs.cp.how')</h2>
                        </div>
                        <div class="text mb_40">
                            <p>@lang('programs.cp.how_desc') </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box ml_30 mt_19">
                    <figure class="image"><img src="assets/images/gallery/cp_how.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cause-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <h2>@lang('programs.cp.focus')</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/principal.jpg" alt=""></a>
                            </figure>
                            <div class="category"><a href="#">@lang('programs.cp.area_1')</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/cp_infra.png"
                                        style="width:470px;height:270px;"></a></figure>
                            <div class="category"><a href="#">@lang('programs.cp.area_2')</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 cause-block">
                <div class="cause-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="assets/images/gallery/professor.jpg"
                                        style="width:470px;height:270px;"></a></figure>
                            <div class="category"><a href="#">@lang('programs.cp.area_3')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-style-two">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="inner-box" style="display: flex; justify-content: center; align-items: center;">
            <div class="auto-container">
                <div class="row align-items-start">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
                        <img src="assets/images/cp_logo_white_transparent.png" alt="Antioquia Logo">
                        <h1 style="margin-bottom: 20px; color:#fff"><b><i>@lang('programs.cp.p1')</i></b>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="about-style-two pt_120">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_two" style="display: flex; gap: 20px;">
                    <!-- Column 1 -->
                    <div class="content-box" style="flex: 1; padding-right: 20px;">
                        <div class="text mb_40">
                            <p>
                                <i class="bi bi-star" style="font-size: 1.5rem; color: #4a235a;"></i>
                                @lang('programs.cp.p2')
                            </p>
                            <p>
                                <i class="bi bi-star" style="font-size: 1.5rem; color: #4a235a;"></i>
                                @lang('programs.cp.p3')
                            </p>
                            <p>
                                <i class="bi bi-star" style="font-size: 1.5rem; color: #4a235a;"></i>
                                @lang('programs.cp.p4')
                            </p>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="content-box" style="flex: 1;">
                        <div class="text mb_40">
                            <p>
                                <i class="bi bi-star" style="font-size: 1.5rem; color: #4a235a;"></i>
                                @lang('programs.cp.p5')
                            </p>
                            <p>
                                <i class="bi bi-star" style="font-size: 1.5rem; color: #4a235a;"></i>
                                @lang('programs.cp.p6')
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- avaliable opportunities -->
<section class="about-style-two pt_120" style="background-color:#f5f1fb;">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <h2 style="color:#4a235a"><i>@lang('programs.cp.p7'):</i></h2>
            <div class="col-lg-12 col-md-12 col-sm-12 content-column" style="margin-top:50px;">

                <div class="content_block_two" style="display: flex; gap: 20px;">
                    <!-- Column 1 -->
                    <div class="content-box" style="flex: 1; padding-right: 20px;">
                        <div class="text mb_40">
                            <p><b> @lang('programs.cp.p8')</b></p>
                            <div>
                                <ul class="list-style-one clearfix">
                                    <li>@lang('programs.cp.p9')</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="content-box" style="flex: 1;">
                        <div class="text mb_40">
                            <p><b>@lang('programs.cp.p10')</b></p>
                            <div>
                                <ul class="list-style-one clearfix">
                                    <li>@lang('programs.cp.p11')</li>
                                    <li>@lang('programs.cp.p12')</li>
                                    <li>@lang('programs.cp.p13')</li>
                                    <li>@lang('programs.cp.p14')</li>
                                    <li>@lang('programs.cp.p15')</li>
                                    <li>@lang('programs.cp.p16')</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="content-box" style="flex: 1;">
                        <div class="text mb_40">
                            <p><b>@lang('programs.cp.p17')</b></p>
                            <div>
                                <ul class="list-style-one clearfix">
                                    <li>@lang('programs.cp.p18')</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 style="color:#4a235a"><b><i>@lang('programs.cp.req'):</i></b></h2>
                <div class="content_block_one" style="display: flex; gap: 20px;">
                    <div class="content-box" style="flex: 1; padding-right: 20px; margin-top:50px;">
                        <div>
                            <ul class="list-style-one clearfix">
                                <li>@lang('programs.cp.req1')
                                    <a href="{{ route('memberships') }}"
                                        style="all: unset;background-color:#4a235a; border-color: #4a235a; color: #fff;"><i
                                            class="bi bi-person"></i>
                                        @lang('header.signup_member')</a>
                                </li>
                                <li>@lang('programs.cp.req2')</li>
                                <li>@lang('programs.cp.req3')</li>
                                <li>@lang('programs.cp.req4')</li>
                                <li>@lang('programs.cp.req5')</li>
                                <li>@lang('programs.cp.req6')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-style-two">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="inner-box" style="display: flex; justify-content: center; align-items: center;">
            <div class="auto-container">
                <div class="row align-items-start">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
                        <img src="assets/images/cp_logo_white_transparent.png" alt="Antioquia Logo">
                        <h1 style="margin-bottom: 20px; color:#fff"><b><i>@lang('programs.cp.p20')</i></b>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- avaliable opportunities -->
<section class="about-style-two pt_120" style="margin-bottom:50px;">
    <div class="auto-container">
        <h2 style="color:#4a235a"><b><i>@lang('programs.cp.exp'):</i></b></h2>
        <div class="content_block_one" style="display: flex; gap: 20px;">
            <div class="content-box" style="flex: 1; padding-right: 20px; margin-top:50px;">
                <div>
                    <ul class="list-style-one clearfix">
                        <li>@lang('programs.cp.exp1')</li>
                        <li>@lang('programs.cp.exp2')</li>
                        <li>@lang('programs.cp.exp3')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-style-two">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="inner-box" style="margin-bottom:50px;">
            <img src="assets/images/gallery/aeth-logo.png" alt="Aeth Logo">
            <img src="assets/images/gallery/garret-logo.png" alt="Garret Logo">
            <img src="assets/images/gallery/lily-logo.png" alt="Lily Logo">
        </div>
    </div>
</section>


@include('partials.contact')

@endsection
