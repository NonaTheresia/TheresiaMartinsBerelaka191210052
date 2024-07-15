<?php

namespace App\Http\Controllers\Footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class FooterController extends Controller
{
    protected $home;

    public function index()
    {
        $Home = new Home();
        return view('footer.index', [
            'getHeader' => $Home->getHeader(),
            'getFooter' => $Home->getFooter(),
        ]);
    }
}
