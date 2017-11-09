<?php

namespace OwenIt\Activity\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Single page to all routes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activity::app');
    }
}
