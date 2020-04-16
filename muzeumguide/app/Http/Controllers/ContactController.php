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

    public function confirm (ContactRequest $request)    //確認ページ表示
    {
        return view('contact.confirm', ['confirm_message' => '入力内容は以下でよろしいでしょうか？よろしければ送信ボタンを押してください。']);
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
