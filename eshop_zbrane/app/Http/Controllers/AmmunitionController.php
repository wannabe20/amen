<?php

namespace App\Http\Controllers;

use App\Models\Ammunition;
use Illuminate\Http\Request;

class AmmunitionController extends Controller
{
    public function index()
    {
        $ammunitions = Ammunition::all();
        return view('ammunitions.index', compact('ammunitions'));
    }
}
