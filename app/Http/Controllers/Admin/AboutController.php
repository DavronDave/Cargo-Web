<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::query()->firstOrFail();
        return view('admin/about/index', compact('about'));
    }
}
