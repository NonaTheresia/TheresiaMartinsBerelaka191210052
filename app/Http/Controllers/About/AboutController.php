<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class AboutController extends Controller
{
    protected $home;

    public function index()
    {
        $Home = new Home();
        return view('about.index', [
            'getHeader' => $Home->getHeader(),
            'getAbout'     => $Home->getAbout(),
        ]);
    }
}
