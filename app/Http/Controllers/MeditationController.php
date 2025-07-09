<?php

namespace App\Http\Controllers;

use App\Models\Meditation;
use Illuminate\Http\Request;

class MeditationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Meditation::latest()->paginate(5);
        return view('meditation.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meditation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'breathing_exercise' => 'required|string|in:Deep Breathing,Box Breathing,Alternate Nostril Breathing,4-7-8 Breathing',
            'guided_video' => 'required|mimes:mp4,avi,mov,mkv,webm' // Max file size 50MB
        ]);

        $table = new Meditation();

        
        $fileName = "med_" . time() . "." . $request->guided_video->extension();
        $request->guided_video->move(public_path('storage'), $fileName);

        $table->name = $request->name;
        $table->title = $request->title;
        $table->description = $request->description;
        $table->breathing_exercise = $request->breathing_exercise;
        $table->guided_video= $fileName;
        $table->save();

        return redirect('meditation')->withSuccess("Inserted Successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Meditation $meditation)
    {
        return view('meditation.show',compact('meditation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meditation $meditation)
    {
        return view('meditation.edit', compact('meditation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meditation $meditation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'breathing_exercise' => 'required|string|in:Deep Breathing,Box Breathing,Alternate Nostril Breathing,4-7-8 Breathing',
            'guided_video' => 'required|mimes:mp4,avi,mov,mkv,webm' // Max file size 50MB
        ]);

        $table = Meditation::find($meditation->_id);

        if ($request->hasFile('guided_video')) {
            $fileName = "med_" . time() . "." . $request->guided_video->extension();
            $request->guided_video->move(public_path('storage'), $fileName);
            $table->guided_video = $fileName;
        }

        $table->name = $request->name;
        $table->title = $request->title;
        $table->description = $request->description;
        $table->breathing_exercise = $request->breathing_exercise;

        $table->save();

        return redirect('meditation')->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meditation $meditation)
    {
        $meditation->delete();
        return redirect('meditation')->withSuccess("Deleted Successfully!!");
    }
}
