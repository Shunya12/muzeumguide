<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Muzeum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MuzeumguideController extends Controller
{

    private $category;
    private $muzeum;
   //^^^^^^^^
    public function __construct(Category $category, Muzeum $muzeum)//クラスインスタンス化渡す、モデルのクラス　woプロパティに代入
    {
        $this->category = $category;
        $this->muzeum = $muzeum;
    }

    public function index()
    {
        return view('muzeumguide.index');
    }

    public function showCategory($category_name)
    {
        $category = $this->category->getByNameEn($category_name);
        $muzeums = $this->muzeum->getByCategoryId($category->id);

        $data = [
            'muzeums' => $muzeums,
            'category_name' => $category->name
        ];
        return view('muzeumguide.category', $data);
    }

    public function showMuzeum($category, $muzeum_id)
    {
        $muzeum = $this->muzeum->find($muzeum_id);
        $data = [ //キーを変数として使う
            'muzeum' => $muzeum
        ];
        return view('muzeumguide.muzeum', $data );
    }


}
