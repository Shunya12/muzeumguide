<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    private $category;

    public function __construct(Category $category) //コンストラクタはパブリック
    {
        $this->category = $category;
    }

    public function contact()    //お問い合わせページ表示
    {
        $categories = $this->category->all();
        return view('contact.contact', ['categories' => $categories]);
    }

    public function confirm (Request $request)    //確認ページ表示
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:200',
            'message' => 'required|string|max:500',
        ]);

        $inputs = $request->all();

        return view('contact.confirm', ['confirm_message' => '以下の内容でよろしければ、送信ボタンを押してください。', 'inputs' => $inputs]);
    }

    public function showThanks () //送信ページ
    {
        $categories = $this->category->all();
        return view('contact.thanks', ['categories' => $categories]);
    }

    // public function store (Request $request)
    // {
    //     //DB保存処理
    //     return redirect()->route('contact.thanks');
    // }
}
