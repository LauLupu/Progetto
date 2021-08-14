<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;
class inventoryController extends Controller
{
    //
    function show() {
        $data= Distributor::all();
        return view('list',['iceCream'=>$data]);
    }
}
