<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Modules\Admin\Entities\Models\Category;

class FrontendController extends Controller
{
    public function __construct()
    {
        $categories = Category::take(4)->get();
        View::share('categories', $categories);
    }
}
