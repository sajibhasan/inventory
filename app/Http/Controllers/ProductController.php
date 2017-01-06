<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Brand;
use App\Suplier;
use App\Category;
Use App\Product;

class ProductController extends Controller
{
    Public function index(){
    $productlist = DB::table("products")
	        ->select('products.*','brands.*', 'supliers.*',DB::raw('count(products.id) as total_product'))
                ->leftJoin('brands','brands.id','=','products.brand_id')
                ->leftJoin('supliers','supliers.id','=','products.suplier_id')
	        ->groupBy('products.brand_id','products.suplier_id','products.product_name')
	        ->get();

//print_r($productlist);
//exit;
       return view ("product.index", compact('productlist'));
    }
    public  function getBrand(){
        $brands=[];
            foreach (Brand::all() as $brand)
        {
            $brands[$brand->id]= $brand->brand_name;
        }
        return $brands;
    }
    public function getSuplier(){
        $supliers =[];
            foreach (Suplier::all() as $suplier)
        {
            $supliers[$suplier->id]= $suplier->suplier_name;
        }
        return $supliers;
    }
    
    public function storeBrand(Request $request){
       
        $brand = Brand::create($request->all());
        return response()->json(['success' => true, 'brand' => $brand]);
      
    }
    public function storeSuplier(Request $request){
       
        $suplier = Suplier::create($request->all());
        return response()->json(['success' => true, 'suplier' => $suplier]);
      
    }
    Public function create(){
         $brands = $this->getBrand();
        $supliers = $this->getSuplier();
        
        return view ("product.create", compact('brands', 'supliers'));
    }
    public function store(Request $request)
    {
       
        Product::create([
            'brand_id' => $request->get('brand_id'),
            'suplier_id' => $request->get('suplier_id'),
              'product_name' => $request->get('product_name'),
             'product_type' => $request->get('product_type'),
            
        ]);

        return redirect('product/create')
            ->with('flash_notification.message', 'Product Created Successfully')
            ->with('flash_notification.level', 'success');
    }
}
