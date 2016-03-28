<?php

namespace App\Http\Controllers;

use Mail;
use App\Category, App\Topic, App\Article, App\Blog;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Index page
     *
     * @return Response
     */
    public function index()
    {
	    $assign['topics']   = (new Topic)->getHotContents(20);
	    $assign['articles'] = (new Article)->getHotContents(20);
	    $assign['blogs']    = (new Blog)->getHotContents(20);

        return view('home.index', $assign);
    }

}
