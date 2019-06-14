<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my Laravel page';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title'=> 'services',
            'services' => ['Web Design', 'programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
    public function contract(){
        $data = array(
            'title'=> 'tasks',
            'tasks' => ['Web Design', 'programming', 'SEO']
        );
        return view('pages.contract')->with($data);
       
    }
}
