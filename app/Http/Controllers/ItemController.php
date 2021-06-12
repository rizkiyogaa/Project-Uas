<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LookupRequest;
use App\Item;
use App\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{

    public function index(Request $request)
    {
        $menus = Item::get();
        $menusCount = $menus->count();

        return view('pages.item.index', compact(
            'menus',
            'menusCount'
        ));
    }

    public function create()
    {
        return view('pages.item.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $menu = new Item($request->all());
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $name = $image->getFilename().'.'.$extension;
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);

            $menu->imageUrl = $name;
        }
        
        $menu->save();
        
        return redirect()->route('items.index')->with('success', 'Item created successfully');
    }

    public function edit($id)
    {
        $menu = Item::findOrFail($id);

        return view('pages.item.edit', compact([
            'menu'
        ]));
    }

    public function update(Request $request, $id)
    {
        $menu = Item::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $name = $image->getFilename().'.'.$extension;
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);

            $menu->imageUrl = $name;
        }
        $menu->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    public function destroy($id)
    {
        $menu = Item::findOrFail($id);
        $menu->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully');
    }
}
