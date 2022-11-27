<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CourseResource;
class ApiCourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return response()->json(CourseResource::collection($courses));
    }
}
