<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Product::latest()->paginate(5);
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category=Category::get();
        return view('product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $table = new Product();
        
        $imgName = "prod_" . time() . "." . $request->image->extension();
        $request->image->move(public_path('images'), $imgName);

        $imgname = "produ_" . time() . "." . $request->image2->extension();
        $request->image2->move(public_path('images'), $imgname);

        $table->name = $request->name;
        $table->image = $imgName;
        $table->image2 = $imgname;
        $table->category = $request->category;
        $table->price = $request->price;
        $table->discount = $request->discount;
        $table->description = $request->description;
        $table->benefit = $request->benefit;
        $table->use = $request->use;
        $table->safety = $request->safety;
        $table->ingredient = $request->ingredient;
        $table->sideeffect = $request->sideeffect;
        // if(strcmp($request->sellable,"on")==0){
        //     $table->sellable=true;
        // }else{
        //     $table->sellable=false;
        // }
        $table->save();

        return redirect('product')->withSuccess("Inserted Successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Pass the produc;;t instance to the view
        $data=$product;
        return view('product.show', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $category = Category::get();
        return view('product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $table=Product::find($product->_id);
    
        $table->name = $request->name;
        if(isset($request->image)){
            $imgName = "prod_" . time() . "." . $request->image->extension();
            $request->image->move(public_path('images'), $imgName);
            $table->image = $imgName;
        }
        if(isset($request->image2)){
            $imgname = "produ_" . time() . "." . $request->image2->extension();
            $request->image2->move(public_path('images'), $imgname);
            $table->image2 = $imgname;
        }
        $table->category = $request->category;
        $table->price = $request->price;
        $table->discount = $request->discount;
        $table->description = $request->description;
        $table->benefit = $request->benefit;
        $table->use = $request->use;
        $table->safety = $request->safety;
        $table->ingredient = $request->ingredient;
        $table->sideeffect = $request->sideeffect;
        // if(strcmp($request->sellable,"on")==0){
        //     $table->sellable=true;
        // }else{
        //     $table->sellable=false;
        // }
      
        $table->save();

        return redirect('product')->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('product')->withsuccess("deleted successfully!!");
        
}
}