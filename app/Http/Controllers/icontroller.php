<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class icontroller extends Controller
{   // to return ever page 
    public function index()
    {
        $data=category::all();
        $categories=product::all();
        return view('home',compact('data','categories'));// main page 
    }
    public function category()
    {
        $data=category::all();
        return view('/category',compact('data'));// selected categories 
    }
    public function addproduct()
    {
        $data=category::all();
        return view('/addproduct',compact('data'));// to add to cart 
    }
    public function login()
    {
        return view('/login'); // login page 
    }
    public function contact()
    {
        return view('/contact');// contact page 
    }
    //diplay categories in left page 
   
    //display all products in home page 
}