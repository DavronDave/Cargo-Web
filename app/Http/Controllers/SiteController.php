<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function blog()
    {
        return view('site.blogs.blog');
    }

    public function blog_detail()
    {
        return view('site.blogs.blog-detail');
    }

    public function clients()
    {
        return view('site.countries');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function portfolio()
    {
        return view('site.portfolio.portfolio');
    }

    public function portfolio_detail()
    {
        return view('site.portfolio.portfolio-detail');
    }

    public function service()
    {
        return view('site.services.service');
    }

    public function service_detail()
    {
        return view('site.services.service-detail');
    }
}
