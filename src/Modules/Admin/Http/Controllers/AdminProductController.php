<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Models\Category;
use Modules\Admin\Http\Requests\RequestProduct;
use Modules\Admin\Entities\Models\Product;
use Illuminate\Support\Str;
use mysql_xdevapi\Expression;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Product::select('id', 'p_name', 'p_active', 'p_title_seo')->paginate(10);
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::product.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = $this->getCategories();
        return view('admin::product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param RequestProduct $request
     * @return Response
     */
    public function store(RequestProduct $request)
    {
        $this->createOrUpdate($request);
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin::product.edit', compact('product'));
    }

    public function getCategories()
    {
        return Category::all();
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(RequestProduct $request, $id)
    {
        $this->createOrUpdate($request, $id);
        return redirect()->back();
    }

    protected function createOrUpdate($request, $id = '')
    {
        $code = 1;
        try {
            $product = new Product();
            if (!empty($id)) {
                $product = Product::find($id);
            }
            $product->p_name = $request->name;
            $product->c_icon = Str::slug($request->icon);
            $product->p_slug = Str::slug($request->name);
            $product->p_title_seo = $request->meta_seo ? $request->meta_seo : $request->name;
            $product->p_description_seo = $request->meta_descr;
            $product->save();
        } catch (\Exception $ex) {
            $code = 0;
        }
        return $code;
    }

    public function action($action, $id)
    {
        if ($action) {
            switch ($action) {
                case 'delete':
                    $product = Product::find($id);
                    $product->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
