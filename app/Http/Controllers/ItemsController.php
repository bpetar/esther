<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ItemRequest;
use App\Item;

class ItemsController extends Controller
{
    //
    public function index()
    {
        $items = Item::all();

        return view('items.index', compact('items'));
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    public function create()
    {
    	return view('items.create');
    }

    public function store(ItemRequest $request)
    {
    	Item::create($request->all());
    	
    	return redirect('items');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        $item->delete();
        
        return redirect('items');
    }

    public function update(ItemRequest $request, $id)
    {
        $item = Item::findOrFail($id);

        $item->update($request->all());
        
        return redirect('items');
    }

    public function edit($id)
    {
    	$item = Item::findOrFail($id);
    	return view('items.edit', compact('item'));
    }
}
