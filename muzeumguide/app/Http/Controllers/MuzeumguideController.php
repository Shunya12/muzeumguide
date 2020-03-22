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

    public function index(Request $request)
    {
        // $categories = $this->category->all();
        $categories = DB::select('select * from categories');
        return view('muzeumguide.index', ['categories' => $categories]);
    }

    public function category_art(Request $request)
    {
        return view('muzeumguide.category_art');
    }

    public function category_history(Request $request)
    {
        return view('muzeumguide.category_history');
    }

    public function category_nature(Request $request)
    {
        return view('muzeumguide.category_nature');
    }

    public function category_science(Request $request)
    {
        return view('muzeumguide.category_science');
    }
}
