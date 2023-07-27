<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view("pages.home");
    }

    public function shop(){
        return view("pages.shop");
    }

    public function productDetail(){
        return view("pages.product-detail");
    }

    public function cart(){
        return view("pages.cart");
    }

    public function checkout(){
        return view("pages.checkout");
    }

    public function login(){
        return view("auth.login");
    }
}
