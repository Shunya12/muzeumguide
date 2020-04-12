<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muzeum extends Model
{
    public function getByCategoryId($category_id)
    {
        return $this->where('category_id', $category_id)->get();
    }
}
