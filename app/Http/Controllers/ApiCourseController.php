<?php

// namespace App\Http\Controllers;
// use App\Models\Course;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// class ApiCourseController extends Controller
// {
//     public function index(Request $request){
//         $user_id = $request->user_id;
//         $courses = Course::whereHas('users',function($q) use ($user_id) {
//             $q->where('user_id',$user_id);
//         })->get();
//         return response ()->json($courses);
//     }
// }
