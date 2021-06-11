<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LookupRequest;
use App\Menu;
use App\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{

    public function index(Request $request)
    {
        $menus = Menu::get();
        $menusCount = $menus->count();

        return view('pages.menu.index', compact(
            'menus',
            'menusCount'
        ));
    }

    public function create()
    {
        $categories = Category::get();

        return view('pages.menu.create', compact(
            'categories'
        ));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $menu = new Menu($request->all());
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $name = $image->getFilename().'.'.$extension;
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);

            $menu->imageUrl = $name;
        }
        
        $menu->save();
        
        return redirect()->route('menu.index')->with('success', 'Menu created successfully');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $categories = Category::get();

        return view('pages.menu.edit', compact([
            'menu',
            'categories'
        ]));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $name = $image->getFilename().'.'.$extension;
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);

            $menu->imageUrl = $name;
        }
        $menu->update($request->all());

        return redirect()->route('menu.index')->with('success', 'Menu updated successfully');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu deleted successfully');
    }
}
