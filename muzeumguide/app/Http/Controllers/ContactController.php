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

        return view('contact.contact');
    }

    public function confirm (ContactRequest $request)    //確認・送信ページ表示
    {
        $inputs = $request->all();
        $data = [
            'confirm_message' => '入力内容は以下でよろしいでしょうか？よろしければ送信ボタンを押してください。',
            'inputs' => $inputs
        ];
        return view('contact.confirm', $data);
    }

    public function showThanks () //お問い合わせありがとうございますを表示
    {
        return view('contact.thanks');
    }

    public function store (ContactRequest $request)
    {
        //DB保存処理
        return redirect()->route('contact.thanks');
    }
}
