<?php

namespace App\Http\Controllers;

use App\Models\Webpage;
use App\Models\Image;
use App\Models\Statistic;
use App\Models\News;
use App\Models\Policies;
use Illuminate\Http\Request;
use App\Models\Financial_report;
use App\Models\Meeting;

class WebpageController extends Controller
{

    public function almokhwa(){

        $images = Image::all();
        $statistics = Statistic::all();
        $news = News::all();

        return view('webpage.index', compact('images','statistics','news'));
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

        $policies = Policies::all();

        return view('webpage.policies',compact('policies'));
    }

    public function policie_show(string $id){

        $policies = Policies::whereId($id)->first();

        return view('webpage.policie_show',compact('policies'));
    }





    public function projects(){

        return view('webpage.projects');
    }


    public function financial(){

        $reports = Financial_report::all();
        return view('webpage.financial',compact('reports'));
    }

    public function financial_show(string $id){

        $reports = Financial_report::whereId($id)->first();

        return view('webpage.financial_show',compact('reports'));
    }

    public function our_news(){

        $news = News::all();
        return view('webpage.news',compact('news'));
    }

    public function clothes_project(){

        return view('webpage.clothes_project');
    }

    public function athath(){

        return view('webpage.athath');
    }

    public function paper_project(){

        return view('webpage.paper_project');
    }

    public function donation_form(){

        return view('webpage.donation_form');
    }

    public function meeting (){

        $meetings = Meeting::all();
        return view('webpage.meetings', compact('meetings'));
    }

    public function meetings_show (string $id){

        $meetings = Meeting::whereId($id)->first();
        return view('webpage.meetings_show',compact('meetings'));
    }
}
