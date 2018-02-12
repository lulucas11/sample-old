<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
<<<<<<< HEAD
        return view('static_pages/home');
=======
        return '主页';
>>>>>>> static-pages
    }

    public function help()
    {
<<<<<<< HEAD
        return view('static_pages/help');
=======
        return '帮助页';
>>>>>>> static-pages
    }

    public function about()
    {
<<<<<<< HEAD
        return view('static_pages/about');
    }
}
=======
        return '关于页';
    }
}
>>>>>>> static-pages
