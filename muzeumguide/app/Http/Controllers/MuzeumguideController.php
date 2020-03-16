<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MuzeumguideController extends Controller
{

    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $categories = $this->category->all();
        return view('muzeumguide.index', ['categories' => $categories]);
    }
}
