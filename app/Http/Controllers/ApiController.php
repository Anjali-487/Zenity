<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Booking;
use App\Models\category;
use App\Models\Coupon;
use App\Models\Meditation;
use App\Models\Order;
use App\Models\Person;
use App\Models\Product;
use App\Models\SleepingAid;
use App\Models\Task;
use App\Models\Therapist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redis;

use function PHPSTORM_META\elementType;

class ApiController extends Controller
{
    //

    public function register_user(Request $request){
        if(isset($request->username) &&
        isset($request->fullname)&&
        isset($request->email) &&
        isset($request->password) &&
        isset($request->mobileno)) 
        {
            $table = new Person();
            $table->fullname = $request->fullname;
            $table->username = $request->username;
            $table->email = $request->email;
            $table->password = $request->password;
            $table->mobileno = $request->mobileno;
            // if ($request->has('uimage')) {
            //     $imageData = base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $request->uimage));
            //     $imageName = time() . ".jpg";
            //     file_put_contents(public_path("images/$imageName"), $imageData);
            //     $table->image = "images/$imageName"; // Save image path in DB
            // }
    
            $table->save();


            return[
                'status' => true,
                'message' => 'User Registerd',
                'person' => $table
            ];
        }
        else {
            return[
                'status' => false,
                'message' => 'Insuficient Perameters',
                'person' => null
            ];
        }
    }

    public function login_user(Request $request){
        if(isset($request->email) &&
        isset($request->password)){

            $table = Person::where('email',$request->email)
            ->where('password',$request->password)
            ->first();


            if(isset($table)){
                return[

                    'status'=>true,
                    'message'=>'user Found',
                    'person'=>$table

                ];
            } else{
                return[
                    'status'=>false,
                    'message'=>'User Not Found',
                    'person'=>null
                ];
            }

        } else{

            return [
                    'status'=>false,
                    'message'=>'Insufficent Parameters',
                    'person'=>null
            ];

        }
    }


    public function get_data(){
    
        $banner_data = Banner::where('status',true)->get();
        $coupon_data = Coupon::where('status',true)->get();
        $category_data = Category::get();
        $product_data = Product::get();
        $t_data=Therapist::get();
        $task_data=Task::get();
        $medi_data=Meditation::get();
        $s_data=SleepingAid::get();
       
        return [

            'status' => 'true',
            'message' => 'Data Getting Success',
            'banner' => $banner_data,
            'coupon'=>$coupon_data,
            'category'=>$category_data,
            'product'=>$product_data,
            'therapist'=>$t_data,
            'task'=>$task_data,
            'meditation'=>$medi_data,
            'sleeping_aid'=>$s_data
        ];

    }

    public function getUsers()
    {
        $users = Person::all(); // Fetch all users
        return view('people', compact('users'));
    }

    public function add_order(Request $request) {
        $uid=$request->uid;
        $pid=$request->pid;
        $data=Order::where('uid',$uid)
        ->where('pid',$pid)
        ->where('status',0)->first();
        if($data==null){
            $table=new Order();
            $product=Product::find($pid);
            $person=Person::find($uid);
            $table->pid=$pid;
            $table->uid=$uid;
            $table->username=$person->username;
            $table->pname=$product->name;
            $table->pic1=$product->image;
            $table->qty=1;
            $table->amount=(int)$product->price;
            $table->tot_amount=(int)$product->price;
            $table->c_discount=(int)$request->c_discount;
            $table->date=$request->date;
            $table->time=$request->time;
            $table->status=0;
            $table->c_o=$request->c_o;

            $table->c_code=$request->c_code;
            $table->address=$request->address;
            $table->save();


            $data=Order::where('uid',$uid)
           
            ->where('status',0)->get();
            return [
                "status"=>true,
                "message"=>"Added to cart",
                "order"=>$data
            ];
        }
        else{
            $data->qty=$data->qty +1;
            $data->tot_amount=(int)$request->qty * (int) $request->amount;
            $data->save();
            $data=Order::where('uid',$uid)
            
            ->where('status',0)->get();

            return [
                "status"=>true,
                "message"=>"Added to cart",
                "order"=>$data
            ];   
        }
    }

    public function book_therapist(Request $request)  {
        $booking=new Booking();
        $booking->date=$request->date;
        $booking->time=$request->time;
        $booking->tname=$request->tname;
        $booking->tid=$request->tid;

        $booking->save();

        return [
            "status"=>true,
            "message"=>"success"
        ];
    }


    public function getOrder(Request $request) {

        $data=Order::where('uid',$request->uid)
        ->where('status',0)->get();
        return [
            "status"=>true,
            "message"=>"get",
            "order"=>$data
        ];   
    }

    public function getOrderhistory(Request $request) {

        $data=Order::where('uid',$request->uid)
        ->where('status','>=',1)->get();
        return [
            "status"=>true,
            "message"=>"getting cart",
            "order"=>$data
        ];
    }
    
    // public function addBooking(Request $request) {
    //     $uid = $request->uid;
    //     $tid = $request->tid;

    //     $therapist = Therapist::find($request->tid);
    //     $table = new Booking();

    //     $table->uid = $uid;
    //     $table->tid = $tid;
    //     $table->fees =(int)$therapist->fees;
    //     $table->name = $therapist->name;
    //     // $table->t_image = $therapist->image;
    //     $table->tot_amount = (int) $request->tot_amount;
    //     $table->address = $request->address;
    //     $table->date = $request->date;
    //     $table->time = $request->time;
    //     $table->service_date = $request->service_date;
    //     $table->service_time = $request->service_time;
    //     $table->status = 0;
    //     $table->c_o = $request->c_o;
    //     // $table->c_discount = $request->c_discount;
    //     $table->c_code = $request->c_code;
    //     $table->save();

    //     return [
    //         'status' => true,
    //         'message' => 'Booking added successfully',
    //         'booking' => $table
    //     ];
    // }

    public function getBooking(Request $request) {
        $uid = $request->uid;
        $table = Booking::where('uid',$uid)->get();
        return [
            'status' => true,
            'message' => 'Booking fetched successfully',
            'booking' => $table
        ];
    }

    public function updateQty(Request $request){

        $uid=$request->uid;
        $id=$request->id;
        $data=Order::find($id);
       

        $data->qty=(int)$request->qty;
        $data->tot_amount=(int)$request->qty * (int) $data->amount;
        $data->save();


        $data=Order::where('uid',$uid)
        ->where('status',0)->get();
        return [
            "status"=>true,
            "message"=>"Added to cart",
            "order"=>$data
        ];
    }

    public function removeorder(Request $request)  {

        $id=$request->id;
        $uid=$request->uid;
        if(isset($id)){
            Order::find($id)->delete();
        } 
        $data=Order::where('uid',$uid)
        ->where('status',0)->get();
        return [
            "status"=>true,
            "message"=>"Remove from cart",
            "order"=>$data
        ];   
    }

    public function confirmOrder(Request $request)  {
        $uid=$request->uid; 
        $time = Carbon::now()->format('H:i');
        $date = Carbon::now()->format('d/m/Y'); 

         $data=Order::where('uid',$uid)
        ->where('status',0)->get();
        foreach($data as $item){
            $item->status=1;
            $item->address=$request->address;
            $item->c_code=$request->c_code;
            $item->c_o=$request->c_o;
            $item->time=$time;
            $item->date=$date;
            $item->c_discount=$request->c_discount;
            $item->save();
        } 
        $data=Order::where('uid',$uid)
        ->where('status',0)->get(); 
        return [
            "status"=>true,
            "message"=>"Order placed successfully",
            "order"=>$data
        ];
    }
    public function confirmbooking(Request $request) {
        $pid=$request->pid;
        $uid=$request->uid;
        $data=Booking::where('pid',$pid)
        ->where('uid',$uid)->where('status',0)->get();
        foreach($data as $item){
            $item->status=1;
            $item->save();
        }
        $data=Booking::where('uid',$uid)
        ->where('status',0)->get();
        return [
            "status"=>true,
            "message"=>"Confirm Booking success",
            "order"=>$data
        ];
    }

    public function removebooking(Request $request)  {
        $id=$request->id;
        $uid=$request->uid;
        if(isset($id)){
            Booking::find($id)->delete();
            
        $data=Booking::where('uid',$uid)
        ->where('status',0)->get();
        return [
            "status"=>true,
            "message"=>"Remove from Booking",
            "order"=>$data
        ];
        }    
    } 

    public function getCouponFromCode(Request $request) {
        if(isset($request->code)) {
            $table = coupon::where('c_code',$request->code)->first(); 

            if(isset($table)) {
                return [
                    'status' => true,
                    'message' => 'Coupon Applyed',
                    'coupon_data' => $table
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Invalid Coupon Code',
                    'coupon_data' => null
                ];
            }
        } else {
            return [
                'status' => false,
                'message' => 'Insufficient parameters',
                'coupon_data' => null
            ];
        }
    }
    

    public function editprofile(Request $request){
        // $imgName=time()."img1"."."."jpg";
        // $image=$request->image;

        // $imgPath=public_path('images')."/".$imgName;
        // file_put_contents($imgPath,base64_decode($image));

        // $user->u_image=$imgName;

        $user=Person::find($request->uid);
        $user->email=$request->email;
        $user->fullname=$request->fullname;
        $user->username=$request->username;
        $user->mobileno=$request->mobileno;
        $user->save();

        return
        [
            "status" => true,
            "message" => "profile updated Successfully!!!",
            "person" => $user
        ];
    }
}