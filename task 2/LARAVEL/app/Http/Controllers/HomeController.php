<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::all();
        return view('home',compact('product'));
    }

    public function adminHome(){
        
        $total = DB::table('sales')->sum('price');
        $terjual = DB::table('sales')->count('id');
        return view('adminHome',['total'=>$total,'terjual'=>$terjual]);
    }
}
