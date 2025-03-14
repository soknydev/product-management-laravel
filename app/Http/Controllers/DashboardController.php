<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth'); // Ensure authentication is required
        }

    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('dashboard', compact('products'));
    }
}
