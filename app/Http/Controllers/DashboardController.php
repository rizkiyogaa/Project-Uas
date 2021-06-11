<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $menus = new Menu;
        $selectedCategory = $request->get('category');
        if ($selectedCategory){
            $menus = $menus->whereHas('category', function($query) use ($selectedCategory) {
                $query->where('name', $selectedCategory);
            });
        }
        $menus = $menus->paginate(15);
        $categories = Category::get();

        return view('pages.dashboard.index', compact([
            'menus',
            'categories'
        ]));
    }
}
