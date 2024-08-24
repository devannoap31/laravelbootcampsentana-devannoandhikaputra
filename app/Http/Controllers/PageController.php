<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function services(){
        return view("pages.services.index");
    }

    public function faq(){
        return view("pages.faq.index");
    }

    public function portofolio(){
        return view("pages.portofolio.index");
    }

    public function blog(){
        return view("pages.blog.index");
    }

    public function contact(){
        return view("pages.contact.index");
    }
}