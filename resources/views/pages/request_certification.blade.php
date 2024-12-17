@extends('layouts.app')

@section('title', '#somosAETH | Request Certification') 

@section('meta-description', 'This is a brief description of the home page.')

@section('meta-keywords', 'home, welcome, introduction') 


<!-- Content here -->

@section('content') 
<section class="about-section bg-color-1 p_relative sec-pad">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative">

                        <div class="text mb_35">
                            <!-- Image floated to the left with margin -->
                            <figure class="image image-1" style="float: left; margin: 0 20px 20px 0;">
                                <img src="assets/images/certification.jpg" alt="">
                            </figure>
                            <h2>@lang('programs.request_certification')</h2>
                            <p style="margin-top:20px;">@lang('programs.request_certification_p1')</p>
                            <p style="margin-top:20px;">@lang('programs.request_certification_p2')</p>
                            <p style="margin-top:20px;">@lang('programs.request_certification_p3')</p>
                            <p style="margin-top:20px;">@lang('programs.request_certification_p4')</p>
                            <p style="margin-top:20px;">@lang('programs.request_certification_p5')</p>
                            <div class="btn-box" style="display: flex; justify-content: center; margin:25px;">
                                <a href="{{ asset('assets/images/files/pdf/ATS_Letter381_Approval_of_Standards.pdf') }}"
                                    target="blank" class="theme-btn-one">
                                    <span>@lang('programs.letter_approval')</span>
                                </a>
                            </div>
                            <p style="margin-top:20px;">@lang('programs.request_certification_p6')</p>
                            @include('partials.contact-message')           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection