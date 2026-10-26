<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Halaman utama landing page.
     */
    public function index(): View
    {
        return view('landing.index');
    }

    /**
     * Halaman about.
     */
    public function about(): View
    {
        return view('landing.about');
    }

    /**
     * Halaman blog.
     */
    public function blog(): View
    {
        return view('landing.blog');
    }

    /**
     * Halaman contact.
     */
    public function contact(): View
    {
        return view('landing.contact');
    }

    /**
     * Halaman course.
     */
    public function course(): View
    {
        return view('landing.course');
    }

    /**
     * Halaman feature.
     */
    public function feature(): View
    {
        return view('landing.feature');
    }
}
