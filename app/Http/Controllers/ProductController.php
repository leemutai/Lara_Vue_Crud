<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('products/index',[]);
    }

    // Additional methods for creating, editing, and deleting products can be added here
}
