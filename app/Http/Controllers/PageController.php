<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Management;
use App\Models\Page;
use App\Models\Study;
use App\Models\Relive;
use App\Models\Tender;
use Illuminate\Http\Request;
use App\Models\Trainingevent;
use Illuminate\Support\Str;


class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('frontend.home');
    }

    public function vision(Request $request)
    {
        return view('frontend.vision');
    }
    public function mdmessage(Request $request)
    {
        return view('frontend.mdmessage');
    }
    public function infastructure(Request $request)
    {
        return view('frontend.infastructure');
    }


    public function contact_us(Request $request)
    {
        return view('frontend.contact');
    }



    public function about(Request $request)
    {
        return view('frontend.about');
    }



    public function gallery(Request $request)
    {
        return view('frontend.gallery');
    }

    public function galleryDetail($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();
        if ($gallery) {
            return view('frontend.gallery-detail', compact('gallery'));
        } else {
            abort(404);
        }
    }

  
    public function boardofdirectory(Request $request)
    {
        return view('frontend.boardofdirectory');
    }



    public function show($slug)
    {
        $page = Page::where('name', 'like', str_replace('-', ' ', $slug))->firstOrFail();


        $viewName = 'pages.' . Str::slug($slug);

        if (view()->exists($viewName)) {
            return view($viewName, compact('page'));
        }


        return view('pages.show', compact('page'));
    }


}
