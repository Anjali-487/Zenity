<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Journal::latest()->paginate(5);
        return view('journal.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('journal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'date' => 'required|date',
        //     'stickers' => 'nullable|string',
        //     'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        //     'journal' => 'required|string',
        //     'lock' => 'required|boolean',
        // ]);

        $table = new Journal();
        //cat123.jpg
        $imgName = "jour_" . time() . "." . $request->stickers->extension();
        $request->stickers->move(public_path('images'), $imgName);

        $imgname = "journ_" . time() . "." . $request->photo->extension();
        $request->photo->move(public_path('images'), $imgname);

        $table->date = $request->date;
        $table->stickers = $imgName;
        $table->photo = $imgname;
        $table->journal=$request->journal;
        $table->lock=$request->lock;
        $table->save();

        return redirect('journal')->withSuccess("Inserted Successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journal $journal)
    {
        //
        return view('journal.edit',compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journal $journal)
    {
         // $request->validate([
        //     'date' => 'required|date',
        //     'stickers' => 'nullable|string',
        //     'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'journal' => 'required|string',
        //     'lock' => 'required|boolean',
        // ]);

        $table=Journal::find($journal->_id);
        $table->date = $request->date;
        $table->journal=$request->journal;
        $table->lock=$request->lock;

        if(isset($request->stickers)){
            $imgName = "jour_" . time() . "." . $request->stickers->extension();
            $request->stickers->move(public_path('images'), $imgName);
            $table->stickers = $imgName;
        }

        if(isset($request->photo)){
            $imgname = "journ_" . time() . "." . $request->photo->extension();
            $request->photo->move(public_path('images'), $imgname);
            $table->photo = $imgname;
        }
        
      
        $table->save();

        return redirect('journal')->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        $journal->delete();
        return redirect('journal')->withsuccess("deleted successfully!!");
    }
}
