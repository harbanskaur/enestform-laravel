<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Icontroller extends Controller
{  
     //Function To Return Categories And Products   
    public function index()
    {
        $data = Category::all();
        $categories = Product::all();
        return view ('home', compact('data', 'categories'));

    }

    //Function To Return Categories Of A  Particular Product
    public function category($id)
    {
        $data = Category::all();
        $categories = Category::where('id', $id)->get();
        $dataa = Product::where('cid', $id)->get();
        return view ('category', compact('data', 'dataa', 'categories'));

    }

    //Function To Return Page
    public function login()
    {
        return view ('login'); 
    }


    public function contact()
    {
        $data = Category::all();
        return view ('/contact', compact('data'));
    }

    //  Inserting Contach Details
    public function contact1(Request $request)
    {   
        $add = new Contact;
        if($request->isMethod('post')) {
            $add->name = $request->get('name');
            $add->email = $request->get('email');
            $add->text = $request->get('text');
            $add->save();
            
        }
        return redirect()->back(); 

    }

    //Product To Add
    public function addproduct($id)
    {
        $data = Category::all(); 
        $dataa = Product::where('id', $id)->get();
        return view('/addproduct', compact('data', 'dataa'));

    }

    //Details To Buy Product
    public function cart(Request $request)
    {
        $productId = $request->get('product_id');
        $quantity = $request->get('qty');
        $product = Product::find($productId);
        if ($quantity <= 0) {
            return redirect()->back()
                             ->with('error', 'Quantity must be greater than 0.');

        }
        if($request->isMethod('post')) {
            Product::where('id', $productId)->decrement('stock', $quantity);
            $userId = Auth::guard('signup')->id();
            $addtocart = new Cart;
            $addtocart->user_id = $userId;
            $addtocart->product_id = $productId;  
            $addtocart->quantity = $quantity;
            $addtocart->save();
        }
        return redirect()->back()
                         ->with('success', 'Product added to cart.');

    }

}
