<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Coupon;
use App\Models\Meditation;
use App\Models\Person;
use App\Models\SleepingAid;
use App\Models\Task;
use App\Models\Therapist;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Therapist::paginate(5);
        return view('therapist.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('therapist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $table = new Therapist();
        
        $imgName = "therapy_" . time() . "." . $request->image->extension();
        $request->image->move(public_path('images'), $imgName);

        $table->name = $request->name;
        $table->image = $imgName;
        $table->title = $request->title;
        $table->desc = $request->desc;
        $table->session = $request->session;
        $table->area = $request->area;
        $table->fees = $request->fees;
        $table->experience = $request->experience;
        $table->email = $request->email;
        $table->password = '123456';
        // if(strcmp($request->status,"on")==0){
        //     $table->status=true;
        // }else{
        //     $table->status=false;
        // }
      
        $table->save();

        return redirect('therapist')->withSuccess("Inserted Successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Therapist $therapist)
    {
        return view('therapist.show',compact('therapist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Therapist $therapist)
    {
        //
        return view('therapist.edit', compact('therapist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Therapist $therapist)
    {
        //
        $table=Therapist::find($therapist->_id);
        

        $table->name = $request->name;
        
        if(isset($request->image)){
            $imgName = "therapy_" . time() . "." . $request->image->extension();
            $request->image->move(public_path('images'), $imgName);
            $table->image = $imgName;
        }

        $table->title = $request->title;
        $table->desc = $request->desc;
        $table->session = $request->session;
        $table->area = $request->area;
        $table->fees = $request->fees;
        $table->experience = $request->experience;
        $table->email = $request->email;
        $table->password = '123456';

        // if(strcmp($_POST['status'],"on")==0){
        //     $status=true;
        // }else{
        //     $status=false;
        // }


      
        $table->save();

        return redirect('therapist')->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Therapist $therapist)
    {
        //
        $therapist->delete();
        return redirect('therapist')->withSuccess("Deleted Successfully!!!");
    }

    public function t_open_login(){
        return view('t_login');
    }

    public function t_home(){
        $sleeping_count=SleepingAid::count();
        $task_count=Task::count();
        $coupon_count=Coupon::count();
        $medi_count=Meditation::count();
        $users = Person::all();
        $books= Booking::all();

        $totalMinutes = 0;
        $totalBookings = $books->count();

        foreach ($books as $book) {
            $startTime = \Carbon\Carbon::parse($book->time);
            $endTime = $startTime->copy()->addMinutes(60); // Assuming each session is 1 hour
            $totalMinutes += $endTime->diffInMinutes($startTime);
        }

        $avgMinutes = $totalBookings > 0 ? round($totalMinutes / $totalBookings) : 0;
        return view('t_home',compact('sleeping_count','task_count','coupon_count','medi_count','users','books','avgMinutes'));
    }

    public function t_login(Request $request) 
    {
        
        $request->validate([
            "email"=>"required | email",
            "password"=>"required|min:6|max:8"]);

        $table=Therapist::where('email',$request->email)
            ->where('password',$request->password)->first();
        
            if($table!=null){

                session()->put('email',$table);
                return redirect('/t_home');

            }else{
                return back()->withSuccess("user found successfully!!");
            }
    }

    public function getUsers()
    {
        $users = Person::all(); // Fetch all users
        return view('people', compact('users'));
    }
}
