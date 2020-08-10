<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome To the blog';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $about='About us';
        return view('pages.about')->with('title',$about);
    }
    public function services(){
        $services=array(
            'title'=>'Our Services',
            'services'=>['Web Design','Programming','SEO']
        );
        return view('pages.services')->with($services);
    }
}
