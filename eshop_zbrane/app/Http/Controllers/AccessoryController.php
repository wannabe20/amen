<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function index()
    {
        $accessories = Accessory::all();
        return view('accessories.index', compact('accessories'));
    }

    public function show($id)
    {
        $accessory = Accessory::findOrFail($id);
        return view('accessories.show', compact('accessory'));
    }
}
