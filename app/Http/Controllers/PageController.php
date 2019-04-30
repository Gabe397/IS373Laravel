<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $tasks = ['Store', 'Mall', 'Home'];

            return view('welcome')->with([
                'foo'=>'bar',
                'tasks'=>$tasks
            ]);


    }

    public function about()
    {
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

}
