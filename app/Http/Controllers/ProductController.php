<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;
use Auth;

use File;
use Validator;
use Carbon\Carbon;
use Collective\Html;

class ProductController extends Controller
{
    public function toCreate(){

    	return view('products.create-product');
    }

    public function addProduct(Request $request){

    	//return $request->file('image');
    		
    		$v=Validator::make(
    			$request->all(),[

    			'producttitle'=> 'required|min:3',
    			'sku'=> 'required|unique:products',
    			'category'=> 'required',
    			'brand'=> 'required',
    			'mrp' => 'required|numeric',
    			'offer' => 'required|numeric',
    			'quantity'=> 'required|numeric',
    			'url' => 'required',
    			'image'=>'required|mimes:jpeg,jpg,png,gif',
    			'description'=>'nullable'
    			]);

    		if($v->fails()){

    			return redirect()->back()->withErrors($v->errors());
    			}

    			$categoryName=strtolower($request->category);
    			$imageName=$request->sku .".". $request->file('image')->getClientOriginalExtension();
    		//$paths=base_url() ."public/product-images/". $categoryName;
            $path="product-images/". $categoryName;
    		//return $imageName;
    		if(!File::exists($path)){
			File::makeDirectory($path, $mode = 0777, true, true);

    	$request->file('image')->move(
        $path, $imageName);

    			
    		}else{

    			$request->file('image')->move(
        $path, $imageName);
    		}

    		$data= array(
    			'producttitle' => $request->producttitle, 
    			'sku' => $request->sku,
    			'category' => strtolower($request->category),
    			'brand' => $request->brand,
    			'mrp' => $request->mrp,
    			'offer' => $request->offer,
    			'quantity' => $request->quantity,
    			'url' => $request->url,
    			'image' => $path .'/'. $imageName,
    			'description' => $request->description,
    			'created_at' => Carbon::now()
    			);

    		Products::Insert($data);

    		return redirect('create-product');
    }

    public function allProducts(){


    	$allProducts=DB::table('products')->get();

    	return view('products.allprods')->with('products',$allProducts);
    }

    public function getDetails($id){

        $details=DB::table('products')->where('sku',$id)->first();

        //dd($details);

        return view('products.single-product')->with('details',$details);
    }
}
