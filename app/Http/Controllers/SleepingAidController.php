<?php

namespace App\Http\Controllers;

use App\Models\SleepingAid;
use Illuminate\Http\Request;

class SleepingAidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=SleepingAid::latest()->paginate(5);
        return view('sleepingaid.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sleepingaid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
            
        //     'title' => 'required|string|max:255',
        //     'audio_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf',
        //     'audios' => 'required|mimes:mp3,wav|' // Max file size 20MB
        // ]);

        $table = new SleepingAid();
        //cat123.jpg
        $imgName = "sleep_" . time() . "." . $request->audio_pic->extension();
        $request->audio_pic->move(public_path('images'), $imgName);
        $table->title = $request->title;
        $table->audio_pic= $imgName;
        $fileName = "aud_" . time() . "." . $request->audios->extension();
        $request->audios->move(public_path('sounds'), $fileName);
        $table->audios= $fileName;
        
        $table->save();

        return redirect('sleepingaid')->withSuccess("Inserted Successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(SleepingAid $sleepingaid)
    {
        return view('sleepingaid.show',compact('sleepingaid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SleepingAid $sleepingaid)
    {
        //
        return view('sleepingaid.edit', compact('sleepingaid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SleepingAid $sleepingaid)
    {
        // $request->validate([
            
        //     'title' => 'required|string|max:255',
        //     'audio_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf',
        //     'audios' => 'required|mimes:mp3,wav' // Max file size 20MB
        // ]);   
        
        $table =SleepingAid::find($sleepingaid->_id);

        if (isset($request->audios)) {
            $fileName = "aud_" . time() . "." . $request->audios->extension();
            $request->audios->move(public_path('sounds'), $fileName);
            $table->audios = $fileName;
        }
        else{
            $table->audios = $request->audios;
        }

        if(isset($request->audio_pic)){
            $imgName = "sleep_" . time() . "." . $request->audio_pic->extension();
            $request->audio_pic->move(public_path('images'), $imgName);
            $table->audio_pic = $imgName;
        }
        else{
            $table->audio_pic = $request->audio_pic;
        }
        
        $table->title = $request->title;
        
        $table->save();

        return redirect('sleepingaid')->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SleepingAid $sleepingaid)
    {
        //
        $sleepingaid->delete();
        return redirect('sleepingaid')->withsuccess("deleted successfully!!");
    }
}
