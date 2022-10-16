<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CourseResource;

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
            "video" => "string|required",
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

        $course = new Course;
        $course->title = $request->title;
        $course->descr = $request->descr;
        $course->image = $path;
        $course->video = $request->video;
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
            "video" => "string|required",
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

        $course->update([
            "title" => $request->title,
            "descr" => $request->descr,
            "video" => $request->video,
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
        $user_id = Auth::user()->id;
        $courses = Course::whereHas('users',function($q) use ($user_id) {
            $q->where('user_id',$user_id);
        })->get();
        return view('lk.index') -> with ('course',$courses);
    }
}
