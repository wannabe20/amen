<?php

namespace App\Http\Controllers;

use App\Models\Knife; // Import the Knife model
use Illuminate\Http\Request;

class KnifeController extends Controller
{
    public function index()
    {
        // Fetch all knives with their associated categories
        $knives = Knife::with('category')->get();
        return view('knives', compact('knives')); // Ensure the view exists
    }
}