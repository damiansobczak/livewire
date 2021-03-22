<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Color;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Models\Post;

class MaterialController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        $collections = Collection::all();
        $materials = Material::all();

        return view('materials', ['colors' => $colors, 'collections' => $collections, 'materials' => $materials]);
    }
}
