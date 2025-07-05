<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("libraries", ['categories' => $categories]);
    }
}
