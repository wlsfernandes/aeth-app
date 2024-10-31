<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('pages.about_us');
    }

    public function ourTeam()
    {
        return view('pages.our_team');
    }

    public function openPositions()
    {
        return view('pages.open_positions');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contactUs()
    {
        return view('pages.contact_us');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function certificationProgram()
    {
        return view('pages.certification_program');
    }

    public function requestCertification()
    {
        return view('pages.request_certification');
    }

    public function certifiedInstitutions()
    {
        return view('pages.certified_institutions');
    }

    public function memberships()
    {
        return view('pages.memberships');
    }

    public function programs()
    {
        return view('pages.programs');
    }

    public function antioquia()
    {
        return view('pages.antioquia');
    }

    public function resourceCenter()
    {
        return view('pages.resource_center');
    }

    public function compellingPreaching()
    {
        return view('pages.compelling_preaching');
    }

    public function bookstore()
    {
        return view('pages.bookstore');
    }

    public function donations()
    {
        return view('pages.donations');
    }

    public function aethFund()
    {
        return view('pages.aeth_fund');
    }

    public function gonzalezCenter()
    {
        return view('pages.gonzalez_center');
    }


}
