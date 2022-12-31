<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function subscribe()
    {
        return view('front.subscribe');
    }

    public function frontIndex()
    {
        return view('front.index', [
            'courses' => Course::where('course_id',null)->with('subCourses')->get()->toArray()
        ]);
    }


    public function service()
    {
        return view('front.service', [
            'courses' => Course::where('course_id',null)->with('subCourses')->get()->toArray()
        ]);
    }
}
