<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all()->toArray();
        return array_reverse($items);
    }

    public function store(Request $request)
    {
        $item = new Item([
            'name' => $request->input('name'),
            'details' => $request->input('details'),
            'price' => $request->input('price')
        ]);
        $item->save();

        return response()->json('Item created!');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return response()->json($item);
    }

    public function update($id, Request $request)
    {
        $item = Item::find($id);
        $item->update($request->all());

        return response()->json('Product updated!');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return response()->json('Product deleted!');

    }




}
