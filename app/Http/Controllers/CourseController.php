<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::orderBy('id', 'desc')
            ->paginate(10); // Трюк для получения пагинатора
        return view('course.index')->with('course', $course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontIndex()
    {
        return view('front.course', [
            'courses' => Course::where('course_id',null)->with('subCourses')->get()->toArray()
        ]);
    }


    public function create()
    {
        $course = Course::where('course_id',null)->get();
        $category = Course::CATEGORIES;
        return view('course.create', [
            'course' => $course,
            'category'=>$category,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "string|required",
            "descr" => "string|required",
            "video" => "string|required",
            "file" => "file",
            "price"=>"integer|required",
            "course_id"=>"integer|nullable",
            "category" => "string|required",
            "userdescr"=>"string"
        ]);

        $path = '';

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $imageName);
            $path = '/uploads/' . $imageName;
        }

        $course = new Course;
        $course->title = $request->title;
        $course->descr = $request->descr;
        $course->image = $path;
        $course->video = $request->video;
        $course->price = $request->price;
        $course->course_id = $request->course_id;
        $course->category=$request->category;
        $course->userdescr=$request->userdescr;
        $course->save();

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $course = Course::where('course_id',null)->get();
        $category = Course::CATEGORIES;
        return view('course.create', [
            'course' => $course,
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            "title" => "string|required",
            "descr" => "string|required",
            "video" => "string|required",
            "file" => "file",
            "price"=>"int|required",
            "category" => "string|required",
            "course_id"=>"integer|nullable",
            "userdescr"=>'string'
        ]);

        $path = $course->image;

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $imageName);
            $path = '/uploads/' . $imageName;
        }

        $course->update([
            "title" => $request->title,
            "descr" => $request->descr,
            "video" => $request->video,
            "image" => $path,
            "price" =>$request->price,
            "course_id"=>$request->course_id,
            'category'=>$request->category,
            'userdescr'=>$request->userdescr
        ]);

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back();
    }


    public function frontLk(){
        $user_id = Auth::user()->id;
        $course = Course::whereHas('users',function($q) use ($user_id) {
            $q->where('user_id',$user_id);
        })->get();
        return view('lk.index') -> with('course',$course);
    }
    
}