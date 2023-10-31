<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title> @stack ('title') </title> 
</head>
<body>
<div class="main-div">
    <div class="head-div">
        <div class="main">
            <div class="head">
                <span>EVEST</span>
                <p>THE BIGGEST CHOICE OF THE WEB</p>
            </div>
            <div class="btn">
                {{-- logout / login  --}}
                @if(!Auth::guard('signup')->check())

                <a href="{{url('/login')}}"><input type="button" name="" value="Log In"></a>
                @else

                <a href="{{url('/logout')}}"><input type="button" name="" value="Log Out : {{Auth::guard('signup')->user()->fullname}}">:</a>
                @endif
            </div>
        </div>
    </div>
    <div class="home-page">
         <div class="pagnation">
            <div class="list">
                <ul>
                   <a href=""><li>ALL PRODUCTS</li></a>
                   <a href=""> <li>CATEGORY</li></a>>
                   <a href=""><li>ADD PRODUCT</li></a>
                    <li>REVIEWS</li>
                    <a href="{{url('/contact')}}"><li>CONTACT</li></a>
                    <li>FAQS</li>
                </ul>
            </div>
            <div class="search">
                <div class="search-1">
                    <div class="input">
                        <input type="text" name="">
                    </div>
                    <div class="btnn">
                        <input type="button" name="" value="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="null">
        
    </div>