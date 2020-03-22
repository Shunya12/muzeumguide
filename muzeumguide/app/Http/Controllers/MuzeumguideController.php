<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class MuzeumguideController extends Controller
{

    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        // $categories = $this->category->all();
        $categories = DB::select('select * from categories');
        return view('muzeumguide.index', ['categories' => $categories]);
    }

    public function showCategory($category)
    {
        $viewName = 'muzeumguide.category_' . $category;
        $categories = DB::select('select * from categories');
        return view($viewName, ['categories' => $categories]);
    }
}
