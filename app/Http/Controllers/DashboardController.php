<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $items = new Item;
        $items = $items->paginate(15);

        return view('pages.dashboard.index', compact([
            'items'
        ]));
    }
}
