<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function landingpage()
    {
        return view('front-end.landingpage', [
            'title' => 'project jobhunt'
        ]);
    }

    public function service()
    {
        return view('front-end.service', [
            'title' => 'Services'
        ]);
    }

    public function article()
    {
        return view('front-end.article', [
            'title' => 'Article'
        ]);
    }

    public function contact()
    {
        return view('front-end.contact', [
            'title' => 'Contact'
        ]);
    }

    public function ourus()
    {
        return view('front-end.ourus', [
            'title' => 'Our Us'
        ]);
    }

    public function gallery()
    {
        return view('front-end.gallery', [
            'title' => 'Gallery'
        ]);
    }
}
