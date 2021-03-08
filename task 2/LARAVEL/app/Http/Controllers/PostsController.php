<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\Models\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('post.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $data = $request->validate([
                'image'=>'required',
                'category'=>'required',
                'name'=>'required',
                'stock'=>'required',
                'price'=>'required',
                'description'=>'required',
        ]);
        $nm = $request->image;
        $namafile = $nm->getClientOriginalName();
    
        
           $product = new Product;
           $product ->category = $request->category;
           $product -> image = $namafile; 
           $product ->name = $request->name;
           $product ->stock = $request->stock;
           $product ->price = $request->price;
           $product ->description = $request->description;
           
            $nm->move(public_path().'/img',$namafile);
     

     $product -> save(); 

        return redirect('admin/product');
            
            

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product = Product::findOrFail($id);
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('post.edit',['products'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id',$id)->delete();
 
      
        return redirect('admin/product');
    }

  
}
