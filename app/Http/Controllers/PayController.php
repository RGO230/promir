<?php

namespace App\Http\Controllers;
use Kenvel\Tinkoff;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class PayController extends Controller

{
    static $terminal   = '1668606448036DEMO';
    static $secret_key = 'sn5yjmrvugjjktdi';


    public function init(Request $request){
        
        $request->validate([
            "id" => "required|exists:courses,id",
        ]);
        $course= Course::where('id',$request->id)->first();
        $subcourses=Course::where('course_id',$request->id)->get();
       
        $courseConnection = new CourseUser;
    $courseConnection->user_id = Auth::id();
    $courseConnection->course_id= $course->id;
    $courseConnection->payment_id = 0;
    $courseConnection->duration = $course->duration;
    $courseConnection->save();
        foreach ($subcourses as $subcourse){

            $subcourseConnection = new CourseUser;
            $subcourseConnection->user_id = Auth::id();
            $subcourseConnection->course_id= $subcourse->id;
            $subcourseConnection->payment_id = 0;
            $subcourseConnection->duration = $subcourse->duration;
            $subcourseConnection->save();
        }
    
   
       
        return response([
            'order_id' => $courseConnection->id,
            'price' => $course->price,
        ]);
    }
    public function success(Request $request){
        $order_id=$request->OrderId;
        
        $courseConnection= CourseUser::Where('id',$order_id)->update([
           "paychek"=>true,
        ]);
        $courseConnection= CourseUser::Where('id',$order_id)->first();
        $coursechild = Course::where('course_id',$courseConnection->course_id)->get();
        foreach ($coursechild as $course){
            CourseUser::where('course_id',$course->id)->where('user_id',$courseConnection->user_id)->update([
                "paychek"=>true,
            ]);
            
        }  
        return response($courseConnection)  ;
    }

        public function error (Request $request){

            $order_id=$request->OrderId;
            CourseUser::Where('id',$order_id)->delete();
            $courseConnection= CourseUser::Where('id',$order_id)->first();
            $coursechild = Course::where('course_id',$courseConnection->course_id)->get();
            foreach ($coursechild as $course){
                CourseUser::where('course_id',$course->id)->where('user_id',$courseConnection->user_id)->delete();
                    
           

        }
        return response()->json("Pay Error");
    }
public function getCoursesWithSubCourses(){
    $course= Course::with('subCourses')->get();
    return $course;
}


    } 
   
        
    
   

