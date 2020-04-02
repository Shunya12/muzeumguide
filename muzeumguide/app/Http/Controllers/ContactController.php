<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ContactController extends Controller
{

    private $category;

    public function __construct(Category $category) //コンストラクタは基本パブリック
    {
        $this->category = $category;
    }

    public function contact() {
        $categories = $this->category->all();
        return view('contact.contact', ['categories' => $categories]);
    }

    public function store (Request $request)
    {
        //DB保存処理
        return redirect()->route('contact.thanks');
    }

    public function confirm ()
    {
        $categories = $this->category->all();
        return view('contact.confirm', ['categories' => $categories]);
    }

    public function showThanks ()
    {
        $categories = $this->category->all();
        return view('contact.thanks', ['categories' => $categories]);
    }
}
