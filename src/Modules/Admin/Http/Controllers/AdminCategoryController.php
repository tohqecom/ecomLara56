<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\RequestCategory;
use Modules\Admin\Entities\Models\Category;
use Illuminate\Support\Str;
use mysql_xdevapi\Expression;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Category::select('id', 'c_name', 'c_active', 'c_title_seo')->paginate(10);
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::category.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param RequestCategory $request
     * @return Response
     */
    public function store(RequestCategory $request)
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
        $category = Category::find($id);
        return view('admin::category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(RequestCategory $request, $id)
    {
        $this->createOrUpdate($request, $id);
        return redirect()->back();
    }

    protected function createOrUpdate($request, $id = '')
    {
        $code = 1;
        try {
            $category = new Category();
            if (!empty($id)) {
                $category = Category::find($id);
            }
            $category->c_name = $request->name;
            $category->c_icon = Str::slug($request->icon);
            $category->c_slug = Str::slug($request->name);
            $category->c_title_seo = $request->meta_seo ? $request->meta_seo : $request->name;
            $category->c_description_seo = $request->meta_descr;
            $category->save();
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
                    $category = Category::find($id);
                    $category->delete();
                    break;
            }
        }

        return redirect()->back();
    }
}
