<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function audio()
    {
        return view('pages.exclusive.audio');
    }
    public function article()
    {
        return view('pages.exclusive.article');
    }

    public function category()
    {
        return view('pages.exclusive.category');
    }
    public function ebook()
    {
        return view('pages.exclusive.ebook');
    }
    public function spreadsheet()
    {
        return view('pages.exclusive.spreadsheet');
    }

    public function pdf()
    {
        return view('pages.exclusive.pdf');
    }

    public function powerpoint()
    {
        return view('pages.exclusive.powerpoint');
    }
    public function programs()
    {
        return view('pages.exclusive.programs');
    }

    public function videoGallery()
    {
        return view('pages.exclusive.video-gallery');
    }

    public function antioquiaExclusive()
    {
        return view('pages.exclusive.antioquia');
    }
    public function capacityBuildingExclusive()
    {
        return view('pages.exclusive.capacity-building');
    }
    public function compellingPreachingExclusive()
    {
        return view('pages.exclusive.compelling-preaching');
    }
    public function gonzalezExclusive()
    {
        return view('pages.exclusive.gonzalez');
    }
    public function youngLideresExclusive()
    {
        return view('pages.exclusive.young-lideres');
    }
}
