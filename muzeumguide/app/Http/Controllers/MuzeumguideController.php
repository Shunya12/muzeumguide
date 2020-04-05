<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Muzeum;
use Illuminate\Support\Facades\DB;

class MuzeumguideController extends Controller
{

    private $category;
    private $muzeum;

    public function __construct(Category $category, Muzeum $muzeum)//クラスインスタンス化渡す、モデルのクラス　woプロパティに代入
    {
        $this->category = $category;
        $this->muzeum = $muzeum;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('muzeumguide.index', ['categories' => $categories]);
    }

    public function showCategory($category)
    {
        $category_id = $this->category->getIdByNameEn($category);
        $muzeums = $this->muzeum->getByCategoryId($category_id);
        $categories = $this->category->all();

        $data = [
            'categories' => $categories,
            'muzeums' => $muzeums,
        ];
        return view('muzeumguide.category', $data);
    }


}
