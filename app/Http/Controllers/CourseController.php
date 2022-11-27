<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
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
    public function create()
    {
        return view('course.create');
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
            "videofile" => "required",
            "file" => "file|required",
            "price"=>"int|required"
        ]);
        
        $path = '';

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $imageName);
            $path = '/uploads/' . $imageName;
        }
        $videopath='';

        if ($request->has('videofile')) {
            $value = $request->file('videofile');
            $ext = $value->extension();
            $videoName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $videoName);
            $videopath = '/uploads/' . $videoName;
        }
        
        

        $course = new Course;
        $course->title = $request->title;
        $course->descr = $request->descr;
        $course->image = $path;
        $course->video = $videopath;
        $course->price = $request->price;
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
        return view('course.edit', [
            'course' => $course
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
            "videofile" => "file",
            "file" => "file",
            "price"=>"int|required"
        ]);

        $path = $course->image;

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $imageName);
            $path = '/uploads/' . $imageName;
        }
        $videopath=$course->video;

        if ($request->has('videofile')) {
            $value = $request->file('videofile');
            $ext = $value->extension();
            $videoName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $videoName);
            $videopath = '/uploads/' . $videoName;
        }

        $course->update([
            "title" => $request->title,
            "descr" => $request->descr,
            "video" => $videopath,
            "image" => $path,
            "price" =>$request->price
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


    public function frontindex(){
        $this->checksubscribe();
        $user_id = Auth::user()->id;
        $course = Course::whereHas('paycheck',function($q) use ($user_id) {
            $q->where('user_id',$user_id)->where('paychek',true);
        })->get();
        
        return view('lk.index') -> with('course',$course);
    }
    private function checksubscribe(){
        $courses = Course::with('paycheck')->get();
        foreach ($courses as $course){
           $subcribe = Carbon::parse($course->paycheck->created_at);
           $now = Carbon::now();
           $duration = $subcribe->diffInDays($now);
           if ($course->paycheck->duration>$duration){
            $course->delete();

           }
        }
    }
}