<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Meditation;
use App\Models\Order;
use App\Models\Person;
use App\Models\Product;
use App\Models\SleepingAid;
use App\Models\Task;
use App\Models\Therapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    //

    public function open_register()  {
        return view('register');
    }

    public function register(Request $request)  {

        $request->validate([
            "username"=>"required",
            "password"=>"required|min:6|max:8",
            "cpassword"=>"required|same:password",
            "email"=>"required|email",
            "mobileno"=>"required|numeric|digits:10",
            "security_question"=>"required",
            "security_answer"=>"required",
            "role"=>"required"
        ]);

        $table=new Admin();
        $table->username=$request->username;
        $table->password=$request->password;
        $table->mobileno=$request->mobileno;
        $table->email=$request->email;
        $table->security_question=$request->security_question;
        $table->security_answer=$request->security_answer;
        $table->role=$request->role;
        $table->save();
        return redirect('regis')->withSuccess("Registered Successfully");


        
    }

    public function open_login() {
        return view('login');
    }



    public function home(){
        $category_count=Category::count();
        $rev=Order::where('status',">=",1)->sum("tot_amount");
        $most_ordered_product = Order::raw(function($collection) {
            return $collection->aggregate([
                ['$group' => ['_id' => '$pname', 'count' => ['$sum' => 1]]], // Group by pname & count occurrences
                ['$sort' => ['count' => -1]], // Sort by count descending
                ['$limit' => 1] // Get top 1
            ]);
        })->first();
        $most_ordered_product_name = $most_ordered_product ? $most_ordered_product->_id : "No products ordered yet";
        $data = Order::orderBy('created_at', 'desc')->take(10)->get();
        $product_count=Product::count();
        $sleeping_count=SleepingAid::count();
        $task_count=Task::count();
        $coupon_count=Coupon::count();
        $medi_count=Meditation::count();
        $banner_count=Banner::count();
        $users = Person::all();

        // $_count=Coupon::count();
        
        return view('home',compact('category_count','rev','most_ordered_product_name','data','product_count',
                    'sleeping_count','task_count','coupon_count','medi_count','banner_count','users'));
    }

    public function login(Request $request)  {

        $request->validate([
            "email"=>"required | email",
            "password"=>"required|min:6|max:8"]);

        $table=Admin::where('email',$request->email)
            ->where('password',$request->password)->first();
        
            if($table!=null){

                session()->put('user',$table);
                return redirect('/home');

            }else{
                return back()->withSuccess("user found successfully!!");
            }
        
    }

    public function forgotpass(){
        return view ('forgotpass');
  
   }

   public function resetpass(Request $request){
    $request->validate([
        "email" => "required|email",
        "new_password" => "required|min:6|max:8",
        "confirm_password" => "required|same:new_password"
    ]);

    $admin = Admin::where('email', $request->email)->first();

    if (!$admin) {
        return back()->withErrors("Email not found in our records.");
    }

    $admin->password =$request->new_password;
    $admin->save();

    return redirect('/')->withSuccess("Password reset successfully. Please log in with your new password.");
}


   public function about_us()  {
    return view('aboutus');
   }

   public function support_t()  {
    return view('support');
   }
   public function contact_us() {
    return view('contactus');
}

public function logout()
    {
        session()->flush();
        return redirect("/");
    }

// Function to handle Contact Form submission
public function submit_contact(Request $request) {
    $request->validate([
        "name" => "required|string|max:100",
        "email" => "required|email",
        "message" => "required|string|min:10"
    ]);

    // Here, you can process the message (store it in a database, send an email, etc.)
    return back()->withSuccess("Your message has been received. We will get back to you soon!");
}

public function open_profile_update()
    {
        return('editprofile');
    }


public function edit_profile(Request $request)  {

    $user=session()->get('user');
    $user->fullname = $request->fullname;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->mobileno = $request->mobileno;
    // $user->image=$request->image;

    // Handle image upload
    if ($request->hasFile('u_image')) {
        $imagePath = $request->file('u_image')->store('profile_images', 'public');
        $user->u_image = '/storage' . $imagePath;
    }

    $user->save();

    return response()->json(['success' => 'Profile updated successfully', 'user' => $user], 200);
}

public function search(Request $request)
{
    $query = $request->input('q');

    if (!$query) {
        return response()->json([]); // Return empty if no query
    }

    // Search across multiple tables
    $users = Person::where('fullname', 'LIKE', "%{$query}%")
                ->orWhere('username', 'LIKE', "%{$query}%")
                ->orWhere('email', 'LIKE', "%{$query}%")
                ->get(['id', 'fullname', 'username', 'email'])
                ->map(function($user) {
                    $user->url = route('user.show', $user->id);
                    return $user;
                });

    $categories = Category::where('cat_name', 'LIKE', "%{$query}%")
                ->get(['id', 'cat_name','cat_pic'])
                ->map(function($category) {
                    $category->url = route('category.show', $category->id);
                    return $category;
                });

    $banners = Banner::where('banner_name', 'LIKE', "%{$query}%")
                ->get(['id', 'banner_name','banner_pic'])
                ->map(function($banner) {
                    $banner->url = route('banner.show', $banner->id);
                    return $banner;
                });

    $tasks = Task::where('description', 'LIKE', "%{$query}%")
                ->get(['id', 'image','description'])
                ->map(function($task) {
                    $task->url = route('task.show', $task->id);
                    return $task;
                });

    $orders = Order::where('pid', 'LIKE', "%{$query}%")
                ->orWhere('status', 'LIKE', "%{$query}%")
                ->get(['id', 'pid','username','pname','amount', 'status'])
                ->map(function($order) {
                    $order->url = route('order.show', $order->id);
                    return $order;
                });

    $products = Product::where('name', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->get(['id', 'name', 'description','image','discount'])
                ->map(function($product) {
                    $product->url = route('product.show', $product->id);
                    return $product;
                });

    $therapists = Therapist::where('name', 'LIKE', "%{$query}%")
                ->orWhere('title', 'LIKE', "%{$query}%")
                ->get(['id', 'name', 'title','desc','image'])
                ->map(function($therapist) {
                    $therapist->url = route('therapist.show', $therapist->id);
                    return $therapist;
                });

    $sleepingaids = SleepingAid::where('title', 'LIKE', "%{$query}%")
                ->get(['id', 'title', 'audios','audio_pic'])
                ->map(function($sleepingaid) {
                    $sleepingaid->url = route('sleepingaid.show', $sleepingaid->id);
                    return $sleepingaid;
                });

    $meditations = Meditation::where('title', 'LIKE', "%{$query}%")
                ->get(['id', 'title','name','description','guided_video'])
                ->map(function($meditation) {
                    $meditation->url = route('meditation.show', $meditation->id);
                    return $meditation;
                });

    // Combine all results into a single response
    $results = [
        'users' => $users,
        'categories' => $categories,
        'banners' => $banners,
        'tasks' => $tasks,
        'orders' => $orders,
        'products' => $products,
        'therapists' => $therapists,
        'sleepingaids' => $sleepingaids,
        'meditations' => $meditations
    ];

    return view('search', compact('categories', 'users', 'banners', 'products', 'orders', 'tasks', 'therapists', 'sleepingaids', 'meditations'));
}
    // public function showUser($id)
    // {
    //     $user = Person::findOrFail($id);
    //     return redirect('users', compact('user'));
    // }

    // // Show category details
    // public function showCategory($id)
    // {
    //     $category = Category::findOrFail($id);
    //     return redirect('category', compact('category'));
    // }

    // // Show banner details
    // public function showBanner($id)
    // {
    //     $banner = Banner::findOrFail($id);
    //     return redirect('banner', compact('banner'));
    // }

    // // Show task details
    // public function showTask($id)
    // {
    //     $task = Task::findOrFail($id);
    //     return redirect('task', compact('task'));
    // }

    // // Show order details
    // public function showOrder($id)
    // {
    //     $order = Order::findOrFail($id);
    //     return redirect('order', compact('order'));
    // }

    // // Show product details
    // public function showProduct($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return redirect('product', compact('product'));
    // }

    // // Show therapist details
    // public function showTherapist($id)
    // {
    //     $therapist = Therapist::findOrFail($id);
    //     return redirect('therapist', compact('therapist'));
    // }

    // // Show sleeping aid details
    // public function showSleepingAid($id)
    // {
    //     $sleepingAid = SleepingAid::findOrFail($id);
    //     return redirect('sleepingaid', compact('sleepingAid'));
    // }

    // // Show meditation details
    // public function showMeditation($id)
    // {
    //     $meditation = Meditation::findOrFail($id);
    //     return redirect('meditation', compact('meditation'));
    // }
}