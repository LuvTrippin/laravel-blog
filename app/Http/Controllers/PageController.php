<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function about()
    {
        return view('page.about');
    }

    public  function team()
    {
        return view('page.team');
    }
}
