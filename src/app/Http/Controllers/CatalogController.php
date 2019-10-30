<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Models\Product;

class CatalogController extends FrontendController
{
    //
    public function getListProducts(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        if($id = array_pop($url)) {
//            dd($id);
            $products = Product::where(['p_category_id' => $id])->paginate(10);

            return view('catalog.product_list', compact('products'));
        }
//        dd($request->segment(2));
//
        return redirect('/');


    }

    public function getProductDetail(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        if($id = array_pop($url)) {
            $product = Product::find($id);
            return view('catalog.product', compact('product'));
        }
    }
}
