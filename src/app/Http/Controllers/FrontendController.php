<?php

namespace App\Http\Controllers;

use App\Helpers\Commons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Modules\Admin\Entities\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class FrontendController extends Controller
{
    protected $session;
    public function __construct()
    {
//        dd(Commons::countCart());
        $cartCount = Cart::count();
        $cartContent = Cart::content();
        $categories = Category::take(4)->get();
        View::share('categories', $categories);
        View::share('cartCount', $cartCount);
        View::share('cartContent', $cartContent);
    }
}
