<?php

namespace App\Http\Controllers;

use App\Models\Webpage;
use App\Models\Image;
use App\Models\Statistic;
use App\Models\News;
use Illuminate\Http\Request;

class WebpageController extends Controller
{

    public function almokhwa(){

        $images = Image::all();
        $statistics = Statistic::all();
        $news = News::all();

        return view('webpage.almokhwa', compact('images','statistics','news'));
    }



    public function aboutus(){

        return view('webpage.aboutUs');
    }



    public function contactus(){

        return view('webpage.contactus');
    }




    public function members(){

        return view('webpage.members');
    }





    public function policies(){

        return view('webpage.policies');
    }



    public function projects(){

        return view('webpage.projects');
    }


}
