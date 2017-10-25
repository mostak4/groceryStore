<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroceryStoreController extends Controller
{
    public function home(){
        return view('frontEnd.home.home');
    }
    public function envents(){
        return view('frontEnd.envents.envents');
    }
    public function about(){
        return view('frontEnd.about-us.about');
    }
    public function product(){
        return view('frontEnd.product.product');
    }
    public function service () {
        return view('frontEnd.services.services');
    }
    public function household(){
        return view('frontEnd.household.household');
    }
    public function vegetables () {
        return view('frontEnd.vegetables.vegetables');
    }
    public function kitchen(){
        return view('frontEnd.kitchen.kitchen');
    }
    public function Beverages(){
        return view('frontEnd.Beverages.category');
    }
    public function petFood (){
        return view('frontEnd.pet-food.pet-food');
    }
}
