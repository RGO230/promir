<?php

namespace App\Http\Controllers;
use App\Models\Graphic;
use App\Models\Consultation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        $consult = Consultation::orderBy('id', 'desc')
            ->paginate(10); // Трюк для получения пагинатора
        return view('consultation.index')->with('consultation', $consult);
    }
    public function create(Request $request){
        $request->validate([
            'name'=>'string|required',
            'phone'=>'|required',
            'email'=>'string|required',
            'selected'=>'string|required'
        ]);
        
        return Consultation::create($request->all());
    }
    public function getInfo(Request $request){
        $request->validate([
            'date'=>'date|required'
        ]);
        $date = $request->date;
        $date=Carbon::parse($date)->format('Y-m-d H:i:s');
        $date_two=Carbon::parse($date)->addDay()->format('Y-m-d H:i:s');
        $consults = Consultation::where('selected','>=',$date)->where('selected','<=',$date_two)->get();
        $selected=[];
        foreach($consults as $consult){
           $selected[]=Carbon::parse($consult->selected)->format('H:i');
        }
        $day = Graphic::DAYOFWEEK[Carbon::parse($request->date)->dayOfWeek];
        $graphic=Graphic::where('dayofweek',$day)->first();
        if(!$graphic){
            return response('Нет информации по этому дню недели', 400);
        }

        $intervals=$this->calculateInterval($graphic);
        $diffs=$intervals;
        foreach ($intervals as $key => $value) {
            if (in_array($value, $selected, true)) {
                unset($diffs[$key]);
            }
        }
        if(empty($diffs)){
            return response('День занят полностью',400);
            
        }
        return response()->json([
            "info"=>[
                "intervals"=>$intervals,
                "selected"=>$selected,
            ],
        ]);


        

    }
    private function calculateInterval(Graphic $graphic){
            $intervals=[];
            $actual_start_at = Carbon::parse($graphic->time_from);
            $actual_end_at = Carbon::parse($graphic->time_to);
            $halfhours = $actual_end_at->diffInHours($actual_start_at,true)*2;
            for ($i=0;$i<$halfhours;$i++){
                if ($i==0){
                    $intervals[]=$actual_start_at->addMinutes(30*$i)->format('H:i');
                }
                    $intervals[]=$actual_start_at->addMinutes(30)->format('H:i');
                // echo $actual_start_at->addHours(30*$i);
            }
            return $intervals;
            
    }
    public function destroy(Consultation $consult)
    {
        $consult->delete();
        return redirect()->back();
    }
}
