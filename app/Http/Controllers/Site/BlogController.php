<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{   
    /**
     * Redireciona para uma view
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request){

        return view('site.blog.index');
    }
}
