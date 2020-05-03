<?php
namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\View\View;

class NavigationComposer
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function compose(View $view)
    {
        $view->with([
            'categories' => $this->category->all(),
        ]);
    }
}
