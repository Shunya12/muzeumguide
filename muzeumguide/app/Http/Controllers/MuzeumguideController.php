<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class MuzeumguideController extends Controller
{

    private $category;

    public function __construct(Category $category)//クラスインスタンス化渡す、モデルのクラス　woプロパティに代入
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('muzeumguide.index', ['categories' => $categories]);
    }

    public function showCategory($category)
    {
        $categories = $this->category->all();
        return view('muzeumguide.category', ['categories' => $categories]);
    }

    
}
