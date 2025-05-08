@extends('layouts.app')

@section('title', '#somosAETH | Compelling Preaching')

@section('meta-description', 'Join the Compelling Preaching Program to gain transformative preaching skills and practical ministry tools. From Christ-centered sermons and culturally relevant preaching to addressing social justice, migration, and trauma-informed ministry, this program equips pastors and leaders, especially within Hispanic and Latino contexts. Enhance your sermon preparation, leadership in ministry, and theological knowledge through interactive workshops, advanced certificates, and specialized training for multigenerational and culturally diverse congregations. Empower your preaching to inspire and transform lives today')

@section('meta-keywords', 'somosAETH, Compelling Preaching Program, Transformative Preaching, Biblical Preaching Training, Relevant Sermon Preparation, Christ-Centered Preaching, Preaching on Migration Issues, Trauma-Informed Ministry, Next Generation Preaching, Social Justice in Sermons, Women Preachers, Women in Ministry Leadership, Hispanic Preaching for Today, Preaching for Children and Youth, Biblical Justice and Faith, Training Hispanic Pastors, Latino Christian Leadership, 1st to 3rd Generation Hispanic Christians, Empowering Latino Preachers, Faith-Based Leadership for Latinos, Hispanic American Theology, Equipping Preachers for Today, Culturally Relevant Sermons, Transforming Congregations Through Preaching, Faith and Justice Integration, Practical Ministry Tools, Sermon Crafting Workshops, Preaching Development Courses, Interactive Preaching Training, Online Preaching Certificate, Latino-Focused Ministry Programs, Hispanic Ministry Resources, Preaching Workshops for Hispanic Churches, Latino Theology and Ministry Training, Hispanic Christian Preaching USA. Capacity building. Oscar Merlo. Certificate in Advance Preaching. Preaching in hispanic american context. Latina preaching. Diploma. Contextual preaching. Hispanic Pastoral Leadership, Transformative Preaching Training, Contemporary Biblical Topics, Preaching for the Latino Church, Resources for Latino Ministry Leaders, Theological Training for Hispanic Pastors, Biblical Education for Latino Ministries, Contextual Preaching, Sermons Inspired by Current Realities, Practical Theology for Christian Leaders, Training Workshops for Preachers, Pastoral Focus on Social Justice Issues, Multigenerational Christian Ministry, Strategies for Latino Church Growth, Biblical Justice in Preaching, Spiritual Formation for Hispanic Leaders, Preaching with a Transformative Purpose,Programa de Predicación Transformadora, Predicación Transformadora, Capacitación en Predicación Bíblica, Preparación de Sermones Relevantes, Predicación Centrada en Cristo, Predicación y el Espíritu Santo. Predicación sobre Temas de Migración, Ministerio Informado en Trauma, Predicación para la Próxima Generación, Justicia Social en los Sermones, Liderazgo de Mujeres en el Ministerio, Predicación Hispana para Hoy, Predicación para Niños y Jóvenes, Justicia Bíblica y Fe, Capacitación de Pastores Hispanos, Liderazgo Cristiano Latino, Cristianos Hispanos de Primera a Tercera Generación, Empoderamiento de Predicadores Latinos, Liderazgo Basado en la Fe para Latinos, Teología Hispanoamericana, Equipando a los Predicadores para Hoy, Sermones Culturalmente Relevantes, Transformación de Congregaciones a Través de la Predicación, Integración de Fe y Justicia, Herramientas Prácticas para el Ministerio, Talleres de Elaboración de Sermones, Cursos de Desarrollo de Predicación, Capacitación Interactiva en Predicación, Certificado de Predicación en Línea, Programas de Ministerio Enfocados en Latinos, Recursos para el Ministerio Hispano, Talleres de Predicación para Iglesias Hispanas, Capacitación en Teología y Ministerio Latino, Predicación Cristiana Hispana en EE.UU. Desarrollo de capacidades. Oscar Merlo. Certificado en Predicación. Predicación Avanzada. Diplomado en Predicación. Predicación en contexto hispano americano. Predicación Latina. Predicación Contextual. Liderazgo Pastoral Hispano, Formación en Predicación Transformadora, Temas Bíblicos Contemporáneos, Predicación para la Iglesia Latina, Recursos para Líderes Ministeriales Latinos, Capacitación Teológica para Pastores Hispanos, Educación Bíblica para Ministerios Latinos, Predicación Contextual, Sermones Inspirados en la Realidad Actual, Teología Práctica para Líderes Cristianos, Talleres de Formación para Predicadores, Enfoque Pastoral en Temas de Justicia Social, Ministerio Cristiano Multigeneracional, Estrategias para el Crecimiento de Iglesias Latinas, Justicia Bíblica en la Predicación, Formación Espiritual y la predicación para Líderes Hispanos, Predicación con Propósito Transformador')


<!-- Content here -->

@section('content')
    <section class="page-title centred">
        <a href="{{ route('lectureSeries2025') }}">
            <div
                style="background-image: url(assets/images/banner/banner_cp.jpg); background-size: cover; background-position: center; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 1;">
            </div>
        </a>

    </section>
    <section class="cta-style-two">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="inner-box">
                <h2>@lang('programs.compelling.p4')</h2>
                <p style="color:#fff"><i>@lang('programs.compelling.p5')</i></p>
            </div>
        </div>
    </section>


    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/cp1.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p6')</h2>
                            </div>
                            <div class="text mb_40">
                                <div class="text">
                                    <p>@lang('programs.compelling.p7') </p>
                                    <p>@lang('programs.compelling.p8')</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box mr_30">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p9')</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('programs.compelling.p10') </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/pastor.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="about-style-two pt_120">
                                                                                                                                                    <div class="auto-container">
                                                                                                                                                        <div class="row align-items-center clearfix">
                                                                                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                                                                                                                                                <div class="image-box ml_30 mt_19">
                                                                                                                                                                    <figure class="image"><img src="assets/images/gallery/cp2.jpg" alt=""></figure>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                                                                                                                                                <div class="content_block_two">
                                                                                                                                                                    <div class="content-box ml_40">
                                                                                                                                                                        <div class="sec-title mb_55">
                                                                                                                                                                            <h2>@lang('programs.compelling.p9')</h2>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="text mb_40">
                                                                                                                                                                            <div class="text">
                                                                                                                                                                                <p>@lang('programs.compelling.p10') </p>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>

                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </section> -->


    <section class="about-style-two pt_120" style="background-color:#f5f1fb;margin-top:25px;">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">

                            <div class="text mb_40">
                                <div class="text">
                                    <p>
                                        <i class="bi bi-translate" style="font-size: 2.0rem; color: #007bff;"></i>
                                        @lang('programs.compelling.p11')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-camera-video" style="font-size: 2.0rem; color: #28a745;"></i>
                                        @lang('programs.compelling.p12')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-clock" style="font-size: 2.0rem; color: #ff9800;"></i>
                                        @lang('programs.compelling.p13')
                                    </p>
                                    <p><!-- Empowerment: Raised Fist Icon -->
                                        <i class="bi bi-people" style="font-size: 2.0rem; color: #673ab7;"></i>
                                        @lang('programs.compelling.p14')
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/cp_church.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_40">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p15')</h2>
                            </div>
                            <div class="text mb_40">
                                <div class="text">
                                    <p>@lang('programs.compelling.p16') </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-style-two pt_120" style="background-color:#f5f1fb;margin-top:25px;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_three">
                        <div class="content-box mr_30">
                            <div class="sec-title mb_55">
                                <h2>@lang('programs.compelling.p17')</h2>
                            </div>
                            <div class="text mb_40">
                                <p>@lang('programs.compelling.p18') </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box ml_30 mt_19">
                        <figure class="image"><img src="assets/images/gallery/cp-student.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-style-two" style="background-color:#f5f1fb">
        <div class="pattern-layer" style="background-color:#f5f1fb"></div>
        <div class="auto-container" style="background-color:#f5f1fb">
            <div class="inner-box" style="max-width:40%;margin-left:350px">
                <img src="assets/images/gallery/logos-3.png" alt="Antioquia Logo">
            </div>
        </div>
    </section>


    @include('partials.contact')

@endsection