<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use App\Models\contact;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;

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
        return view('/addproduct',compact('data','dataa','$userid'));// selected categories 
    }
    public function cart(Request $request)
    {
        $add=new cart;
        if($request->isMethod('post'))
        {
            $add->user_id=$request->get('user');
            $add->product_id=$request->get('product');
            $add->quantity=$request->get('quantity');
            $add->save();
            
        }
        return redirect('addproduct'); 
    }
}
