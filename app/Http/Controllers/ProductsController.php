<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Coocks;
use App\Category;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("products.index",["products"=>Coocks::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    public function createCategory()
    {
        return view("products.createCategory");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Coocks::create([
            
            "coock_name"=>$request->input("coockname"),
            "recipt"=>$request->input("recipe"),
            "category_id"=>$request->input("category_id")
           
        ]);
        return redirect()->route("adminindex");
        





    }
    public function storeCaterogy(Request $request)
    {


        Category::create([
            
            "category_name"=>$request->input("category_name")
           
        ]);
        return redirect()->route("adminindex");
        





    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Coocks::where("id",$id)->firstOrFail();
        return view("products.show",["coock"=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Coocks::where("id",$request->input("id")) ->update([


            "coock_name"=>$request->input("coockname"),
            "recipt"=>$request->input("recipe"),
            "category_id"=>$request->input("category_id")
            "image"=>$request->input("image")





        ])
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Products::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }
}
