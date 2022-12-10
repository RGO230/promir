<?php

namespace App\Http\Controllers;

use App\Models\Stream;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class StreamController extends Controller
{
    public function index()
    {
        $stream = Stream::orderBy('id', 'desc')
            ->paginate(10); // Трюк для получения пагинатора
        return view('stream.index')->with('stream', $stream);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stream.create');
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
            "youtube_flow" => "string|required",
            "file" => "file|required",
            "streamtoken"=>"streamtoken|required",
        ]);

        $path = '';

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $preview_imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $preview_imageName);
            $path = '/uploads/' . $preview_imageName;
        }

        $stream = new Stream;
        $stream->title = $request->title;
        $stream->descr = $request->descr;
        $stream->preview_image = $path;
        $stream->youtube_flow = $request->youtube_flow;
        $stream->streamtoken =Str::random(10);
        $stream->save();

        return redirect()->route('stream.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function show(Stream $stream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function edit(Stream $stream)
    {
        return view('stream.edit', [
            'stream' => $stream
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stream $stream)
    {
        $request->validate([
            "title" => "string|required",
            "descr" => "string|required",
            "youtube_flow" => "string|required",
            "file" => "file|required",
        ]);

        $path = $stream->preview_image;

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $preview_imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $preview_imageName);
            $path = '/uploads/' . $preview_imageName;
        }
        $stream->update([
            "title" => $request->title,
            "descr" => $request->descr,
            "youtube_flow" => $request->youtube_flow,
            "preview_image" => $path,
        ]);
        return redirect()->route('stream.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(stream $stream)
    {
        $stream->delete();
        return redirect()->back();
    }


    // public function streamauth (Request $request)
    // {
    //  $token = $request->streamtoken;
    //  Mail::send(Stream::whereHas('users', function($q)use($user_id){
    //     $q->where('email',$email);
    //     $message->from('guskovrus-71@mail.ru');
    //     $message->to($request->email);
    //     $message->subject($token);

    //  })
    // }

}




