<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index(){
        $itemList = Item::all()->toArray();
        return array_reverse($itemList);
    }
}
