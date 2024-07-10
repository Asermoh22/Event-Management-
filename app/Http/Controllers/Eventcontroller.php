<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;

class Eventcontroller extends Controller
{
    public function index(){
       $events= Event::all();
       return view('events.index',["events"=>$events]);
    }

    public function show($id){
       $event= Event::findOrFail($id);

       return view('events.show',["event"=>$event]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|string',
            'place'=>'required|string',
            'event_date'=>'required',
            'event_time'=>'required',
            'event_endtime'=>'required'

        ]);


        $title=$request->title;
        $place=$request->place;
        $event_date=$request->event_date;
        $event_time=$request->event_time;
        $event_endtime=$request->event_endtime;

        Event::create([
            'title'=>$title,
            'place'=>$place,
            'event_date'=>$event_date,
            'event_time'=>$event_time,
            'event_endtime'=>$event_endtime
        ]);

        return redirect(route('events.index'));
    }

    public function edit($id){
        $event=Event::findOrFail($id);
        return view('events.edit',["event"=>$event]);
    }

    public function update(Request $request,$id){
        $title=$request->title;
        $place=$request->place;
        $event_date=$request->event_date;
        $event_time=$request->event_time;
        $event_endtime=$request->event_endtime;

      Event::findOrFail($id)->update([
            'title'=>$title,
            'place'=>$place,
            'event_date'=>$event_date,
            'event_time'=>$event_time,
            'event_endtime'=>$event_endtime
        ]);

        return redirect(route('events.index',$id));

    }

    public function delete($id){
        Event::findOrFail($id)->delete();
        return redirect(route('events.index'));
    }
}
