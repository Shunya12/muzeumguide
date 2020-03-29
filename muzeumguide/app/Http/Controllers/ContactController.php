<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ContactController extends Controller
{
    private __construct()
    {
        $this->category = $category;
    }

    public function contact(Category $category) {
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

    }

    public function showThanks ()
    {
        $categories = $this->category->all();
        return
    }
}
