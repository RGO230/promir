<?php

namespace App\Http\Controllers;
use Kenvel\Tinkoff;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use App\Models\Course;



class PayController extends Controller

{
    static $terminal   = '1668606448036DEMO';
    static $secret_key = 'sn5yjmrvugjjktdi';


    public function init(Request $request){
        
        $request->validate([

            "user_id" => "required|exists:users,id",
            "course_id" => "required|exists:courses,id",
            
        ]);
       
        $courseConnection = new CourseUser;
        $courseConnection->user_id = $request->user_id;
        $courseConnection->course_id=$request->course_id;
        $courseConnection->payment_id=0;
        $course=Course::where('id',$courseConnection->course_id)->first();
        $courseConnection->duration = $course->duration;
        $courseConnection->save();
        return response($courseConnection->id);
    }
    public function success(Request $request){
        $request->validate([

           
            "OrderId" => "required|exists:course_users,id",
            
        ]);
        $order_id=$request->OrderId;
        
        $courseConnection= CourseUser::Where('id',$order_id)->update([
           "paychek"=>true,
        ]);
        return response($courseConnection)  ;
    }

        public function error (Request $request){
            $request->validate([

                "OrderId" => "required|exists:course_users,id",
                
            ]);
            $order_id=$request->OrderId;
            CourseUser::Where('id',$order_id)->delete();
            return response()->json("Pay Error");

        }
       



    } 
   
        
    
   

