<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Response;

class ProductsController extends AdminController
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products/index');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rows()
    {

        $products = Product::select('id','name', 'description','product_url','updated_at','status')->orderBy('updated_at', 'DESC')->get();
        return Response::json(['data' => $products]);
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->product_type = " "; //$request->product_type;
        $product->product_url = " " ; //$request->product_url;
        $product->api_url =  " ";//$request->api_url;
        $product->icon_file =  " ";//$request->icon_file;
        $product->total_users =  " ";//$request->total_users;
        $product->status =  " ";//$request->status;
        $product->description =  $request->description;
        $result = [];
        if($product->save())
            {
                $result['ok']= "Success";
        }
        else{

                $result['error']= "Failed";
        }
        return Response::json($result);
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $product= Product::find($id);
        $product->name = $request->name;
        $product->product_type = " ";//$request->product_type;
        $product->product_url =  " ";//$request->product_url;
        $product->api_url =  " ";//$request->api_url;
        $product->icon_file =  " ";//$request->icon_file;
        $product->total_users =  " ";//$request->total_users;
        $product->status =  " ";//$request->status;
        $product->description =  $request->description;
        $result = [];
        if($product->save())
            {
                $result['ok']= "Success";
        }
        else{

                $result['error']= "Failed";
        }
        return Response::json($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::find($id);
        $result = [];
        if($product->delete())
            {
                $result['ok']= "Success";
        }
        else{

                $result['error']= "Failed";
        }
        return Response::json($result);
    }
}
