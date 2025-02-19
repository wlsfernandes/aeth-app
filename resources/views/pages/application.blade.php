@extends('layouts.master-without-nav')

@section('title', '#somosAETH | Application')

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'Capacity Building, AETH, application')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card border border-primary">
                <div class="card-header bg-transparent border-primary">
                    <div class="d-flex justify-content-between">
                        <a href="{{ url('application') }}" class="auth-logo">
                            <img src="{{ asset('/assets/images/logo-dark.png') }}" alt="" height="44"
                                class="logo logo-dark">
                        </a>
                        <a href="{{ url('application') }}" class="auth-logo">
                            <img src="{{ asset('/assets/images/garret.png') }}" alt="" height="72" class="logo logo-dark">
                        </a>
                    </div>
                    <h4 class="my-3 text-center">CAPACITY BUILDING FOR BIBLE INSTITUTES</h4>
                    <h4 class="my-3 text-center">GRANT APPLICATION</h4>
                    <h4 class="my-3 text-center">FUNDED BY THE LILLY ENDOWMENT</h4>
                    <p class="card-title-desc" style="margin-top: 50px;">
                        At AETH we are pleased that your Bible Institute is committed to theological education and the
                        formation of pastors and leaders that will serve the churches and communities in our country. To
                        build the capacity of the Bible institutes and in collaboration with Garrett-Evangelical Theological
                        Seminary and the financial support of the Lilly Endowment, AETH is offering grants to eligible Bible
                        institutes.
                    </p>
                    <p class="card-title-desc">
                        The general purpose of this form is to collect the basic general information about the Bible
                        institute to help AETH determine if your Bible institute is eligible and if it meets or not the
                        minimal requirements for grant award. If additional information is needed for further consideration,
                        we may communicate and ask that you expand on your proposal. This is an opportunity to tell us about
                        your organization, the project that you have in mind and the amount of support you will need to
                        accomplish the project successfully. If you believe that your Bible institute meets the criteria of
                        this grant, we recommend that you continue reading the information included in this application.
                    </p>
                    <p class="card-title-desc">
                        We look forward to receiving your institute’s application and discovering the ways we will support
                        the life of your institution and the communities served. It is our mission to continue promoting
                        theological education of excellence, facilitating, and improving the health of the institutions that
                        form our pastors and leaders, thus helping them thrive.
                    </p>
                    <p class="card-title-desc" style="margin-top: 30px;">In Christ,</p>
                    <p class="card-title-desc" style="margin-top: 30px;">AETH - Garrett Grant Processing Unit</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card border border-primary">
                <div class="card-header bg-transparent border-primary">
                    <h5 class="my-0 text-primary">
                        <i class="uil uil-paperclip me-3"></i> Grant Guideline and Procedures | Directrices y Procedimientos
                        para Subvenciones
                    </h5>
                    <p class="card-title-desc" style="margin-top: 20px;">
                        To gain a thorough understanding of the specific details, guidelines, and procedures associated with
                        this grant, we encourage you to access the provided file for complete information.
                    </p>
                    <p class="card-title-desc">
                        Para obtener una comprensión completa de los detalles, directrices y procedimientos específicos
                        asociados con esta subvención, le recomendamos acceder al archivo proporcionado para obtener
                        información completa.
                    </p>
                    <h5 class="card-title text-end font-size-20" style="margin-top: 20px;">
                        <a href="https://gonzalezcenter.s3.us-east-2.amazonaws.com/CapacityBuilding/ParticipantPackake/AETH_CAPACITY_BUILDING_GRANT_GUIDELINES.pdf"
                            target="_blank">
                            <img src="{{ asset('/assets/images/brands/pdf-icon.png') }}" alt="Guidelines"
                                style="width: 32px; height: 32px; vertical-align: middle;"> Download here
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card border border-primary">
                <h4 class="card-title">Learn More</h4>
                <p class="card-title-desc">The purpose of the Capacity Building Project is to build the administrative and
                    management capacity of Bible institutes to help them meet certification standards or improve their
                    internal capacity. This includes developing strategic plans, financial policies, revising curricular
                    offerings, and enhancing leadership and organizational proficiency.</p>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/qoYOH4AnvUM" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card border border-primary">
                <h4 class="card-title">Descubre más</h4>
                <p class="card-title-desc">El propósito del proyecto es construir la capacidad administrativa y de gestión
                    de los institutos bíblicos para ayudarlos a cumplir con los estándares de certificación o mejorar su
                    capacidad interna. Esto incluye desarrollar planes estratégicos, políticas financieras, revisar las
                    ofertas curriculares y mejorar el liderazgo y la competencia organizacional.</p>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zh6W9A4w7xM" title="3ELET" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card border border-primary">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img class="card-img img-fluid" src="{{asset('assets/images/small/eligible.jpg')}}"
                            alt="Card image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Eligibility Information</h5>
                            <p class="card-text">To be eligible for the Capacity Building for Bible Institutes grant, your
                                institution must aim to improve its administrative, managerial, and curricular capacity.
                                This grant supports both certification-seeking institutes and those enhancing internal
                                operations, covering strategic planning, financial policy development, curricular evaluation
                                and revision, and board and instructor training.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border border-primary">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img class="card-img img-fluid" src="{{asset('assets/images/small/eligible.jpg')}}"
                            alt="Card image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Información de Elegibilidad</h5>
                            <p class="card-text">Para ser elegible para su institución debe aspirar a mejorar su capacidad
                                administrativa, gerencial y curricular. Esta subvención apoya tanto a los institutos que
                                buscan certificación como a aquellos que desean fortalecer sus operaciones internas,
                                cubriendo la planificación estratégica, el desarrollo de políticas financieras, la
                                evaluación y revisión curricular, y la capacitación de la junta directiva y los
                                instructores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card border border-primary">
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <h5>Can't find what you are looking for?</h5>
                            <p class="text-muted">Reach us in or Application Center Desk</p>
                            <div>
                                <button type="button" class="btn btn-primary mt-2 me-2 waves-effect waves-light">Email
                                    Us</button>
                                <button type="button" class="btn btn-success mt-2 me-2 waves-effect waves-light">AETH
                                    website</button>
                            </div>
                            <h4 style="margin-top: 50px;">FAQ ( Frequently Asked Questions )</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-3 col-sm-5 mx-auto">
                        <div>
                            <img src="{{asset('assets/images/faqs-img.png')}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div id="faqs-accordion" class="custom-accordion mt-5 mt-xl-0">
                            <div class="card border shadow-none">
                                <a href="#faqs-gen-ques-collapse" class="text-dark" data-bs-toggle="collapse"
                                    aria-haspopup="true" aria-expanded="false" aria-controls="faqs-gen-ques-collapse">
                                    <div class="bg-light p-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle font-size-22">
                                                        <i class="uil uil-question-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">General Questions</h5>
                                                <p class="text-muted text-truncate mb-0">General Questions</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div id="faqs-gen-ques-collapse" class="collapse" data-bs-parent="#faqs-accordion">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @foreach ($faqs as $faq)
                                                    <div>
                                                        <div class="d-flex align-items-start mt-4">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-xs">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-primary-subtle text-primary font-size-22">
                                                                        <i class="uil uil-question-circle"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-16 mt-1">
                                                                    {{$faq->question ? $faq->question : ''}}
                                                                </h5>
                                                                <p class="text-muted">{!! $faq->answer ? $faq->answer : '' !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="card border border-primary">
                                <a href="{{ url('register') }}" class="btn btn-primary waves-effect waves-light"  style="margin:20px;">
                                    <i class="uil-play font-size-20"> Click here to start your application!</i>
                                    <span></span>
                                    <i class="uil-play font-size-20"> ¡Haz clic aquí para iniciar tu solicitud!</i>
                                </a>
                            </div>
                        </div>
                    </div> -->
    </div>
@endsection
