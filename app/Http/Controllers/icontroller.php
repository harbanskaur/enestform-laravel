<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use App\Models\contact;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;//authentication

use Illuminate\Http\Request;

class icontroller extends Controller
{   // to return ever page 
    public function index()
    {
        $data=category::all();
        $categories=product::all();
        return view('home',compact('data','categories'));// main page 
    }
    public function category($id)
    {
        $data=category::all();
        $categories=category::where('id',$id)->get();
        $dataa=product::where('cid',$id)->get();
        return view('category',compact('data','dataa','categories'));// selected categories 
    }
    public function login()
    {
       
        return view('login'); // login page 
    }
    public function contact()
    {
        
        $data=category::all();
        return view('/contact',compact('data'));
    }
    public function contact1(Request $request)
    {   
        $add=new contact;
        if($request->isMethod('post'))
        {
            $add->name=$request->get('name');
            $add->email=$request->get('email');
            $add->text=$request->get('text');
            $add->save();
            
        }
        return redirect()->back(); 
    }
    public function addproduct($id)
    {
        $data=category::all(); 
        $dataa=product::where('id',$id)->get();
        return view('/addproduct',compact('data','dataa'));// selected categories 
    }
    public function cart(Request $request)
    {
        $productId = $request->get('product_id');
        $quantity = $request->get('qty');
        $product=product::find($productId);
        if ($quantity <= 0) {
            return redirect()->back()->with('error','Quantity must be greater than 0.');
        }
        if($request->isMethod('post')){
            product::where('id', $productId)->decrement('stock', $quantity);
            $userId = Auth::guard('signup')->id();
            $addtocart=new cart;
            $addtocart->user_id = $userId;
            $addtocart->product_id=$productId;  
            $addtocart->quantity=$quantity;
            $addtocart->save();
        }
        return redirect()->back()->with('success', 'Product added to cart.');
    }
}
