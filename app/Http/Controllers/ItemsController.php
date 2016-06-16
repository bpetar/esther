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
    	$item = Item::create($request->all());
    
        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                
                //set upload path
                $destinationPath = 'uploads';
                //get filename
                $filename = $request->file('image')->getClientOriginalName();
                //uploading file to given path
                $request->file('image')->move($destinationPath, $filename);
                //dd($filename);
                //set item image
                $item->image = $destinationPath . '/' . $filename;
                //save
                $item->save();

            }
            else
            {
                //there was problem uploading image
                dd('there was problem uploading image');
            }

            

        }
        else
        {
            //image file not uploaded
            dd('image file not uploaded');
        }

        /*if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
            // sending back with message
            Session::flash('success', 'Upload successfully'); 
            return Redirect::to('upload');
        }*/


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
