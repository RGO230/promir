<?php

namespace App\Http\Controllers;

use App\Models\Graphic;
use Carbon\Carbon;

use Illuminate\Http\Request;

class GraphicController extends Controller
{
    public function index()
    {
        $graphic = Graphic::orderBy('id', 'desc')
            ->paginate(10); // Трюк для получения пагинатора
        return view('graphic.index')->with('graphic', $graphic);
    }
    public function create()
    {
        $days = Graphic::DAYOFWEEK;
        return view('graphic.create', [
            'days' => $days
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'time_from' => 'required',
            'time_to' => 'required',
            'dayofweek' => 'string|required'
        ]);

        $graphic = new Graphic();
        $graphic->time_from = $request->time_from;
        $graphic->time_to = $request->time_to;
        $graphic->dayofweek = $request->dayofweek;
        $graphic->save();

        return redirect()->route('graphic.index');
    }
    public function show(Graphic $graphic)
    {
        //
    }
    public function edit(Graphic $graphic)
    {
        $days = Graphic::DAYOFWEEK;
        return view('graphic.edit', [
           
            'days' => $days,
            'graphic' => $graphic,
        ]);
    }
    public function update(Request $request, Graphic $graphic)
    {
        $request->validate([
            'time_from' => 'required',
            'time_to' => 'required',
            'dayofweek' => 'string|required'
        ]);


        $graphic->update([
            "time_from" => $request->time_from,
            "time_to" => $request->time_to,
            "dayofweek" => $request->dayofweek

        ]);

        return redirect()->route('graphic.index');
    }
    public function destroy(Graphic $graphic)
    {
        $graphic->delete();
        return redirect()->back();
    }
}
