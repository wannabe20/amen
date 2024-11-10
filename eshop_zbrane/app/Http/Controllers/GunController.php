<?php

namespace App\Http\Controllers;

use App\Models\Gun;
use App\Models\Category;
use Illuminate\Http\Request;

class GunController extends Controller
{
    public function index()
    {
        $guns = Gun::with('category')->get();
        return view('guns', compact('guns'));
    }

    public function show($id)
    {
        $gun = Gun::findOrFail($id);
        return view('guns.show', compact('gun'));
    }
}
