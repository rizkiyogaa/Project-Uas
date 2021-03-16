<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LookupRequest;
use App\Menu;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the religions data.
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $lookups = Menu::get();
        $lookupCount = $lookups->count();

        if ($request->view == 'trash') {
            $lookups = $trash->get();
        }

        return view('pages.menu.index', compact(
            'lookups',
            'lookupCount'
        ));
    }

    /**
     * Show the form for creating a new religion data.
     *
     * @return void
     */
    public function create()
    {
        return view('pages.menu.create');
    }

    /**
     * Store a newly created religion data in storage.
     *
     * @param LookupRequest $request
     * @return void
     */
    public function store(LookupRequest $request)
    {
        try {
            Menu::create($request->validated() + [
                'reference' => 'religion',
            ]);
        } catch (QueryException $e) {
            session()->flash('error', $e->errorInfo[2] ?? 'An error has occurred.');
            return redirect()->back();
        }

        session()->flash('success', 'Data has been saved successfully.');

        return redirect()->route('menu.index');
    }

    /**
     * Show the form for editing religion data.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        $lookup = Menu::findOrFail($id);

        return view('pages.menu.edit', compact('lookup'));
    }

    /**
     * Update the religion data in storage.
     *
     * @param LookupRequest $request
     * @param int $id
     * @return void
     */
    public function update(LookupRequest $request, $id)
    {
        $lookup = Menu::findOrFail($id);

        try {
            $lookup->update($request->validated());
        } catch (QueryException $e) {
            session()->flash('error', $e->errorInfo[2] ?? 'An error has occurred.');
            return redirect()->back();
        }

        session()->flash('success', 'Data has been saved successfully.');

        return redirect()->route('settings.religion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        $lookup = Menu::findOrFail($id);
        $lookup->delete();

        session()->flash('success', 'Data has been deleted successfully.');

        return redirect()->route('settings.religion.index');
    }
    
    /**
     * Restore the specified religion data from storage.
     *
     * @param int $id
     * @return void
     */
    public function restore($id)
    {
        Menu::onlyTrashed()
            ->where('id', $id)
            ->restore();
        
        session()->flash('success', 'Data has been restored successfully.');
    
        return redirect()->route('settings.religion.index');
    }
}
