<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;
class inventoryController extends Controller
{
    //
    function show() {
        return Distributor::all();
        return view('list');
    }
}
