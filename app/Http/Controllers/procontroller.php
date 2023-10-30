<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pro;

class procontroller extends Controller
{
    //

    public function ind (){
        $products=Pro::get();
        return view('products.index',compact('products'));
    }
    public function create (){
        return view ('products.create');
    }

    public function store (Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'mrp'=>'required|numeric',
            'price'=>'required|numeric',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $products=new Pro;
        $products->name=$request->name;
        $products->mrp=$request->mrp;
        $products->price=$request->price;
        $products->description=$request->description;
        $products->image=$imageName;
        $products->save();

        return back()
        ->withSuccess('You have succesfully uploaded the image!');
    }

    public function show ($id){
        $products=Pro::where('id',$id)->first();
        return view('products.show',compact('products'));
    }

    public function edit($id){
        $hi=Pro::where('id',$id)->first();;
        return view('products.edit',compact('hi'));
    }

    public function del($id){
        $products=Pro::where('id',$id)->first();
        $products->delete();
        return back()
        ->withSuccess('You have succesfully deleted !');
    }

    public function update (Request $request,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'mrp'=>'required|numeric',
            'price'=>'required|numeric',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $products=Pro::where('id',$id)->first();
        if(isset($request->image))
        {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            $products->image=$imageName;

        }

        // $products=new Pro;
        $products->name=$request->name;
        $products->mrp=$request->mrp;
        $products->price=$request->price;
        $products->description=$request->description;

        $products->save();

        return back()
        ->withSuccess('You have succesfully updated the details!');
    }
}
