<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getByNameEn($name_en)
    {
        return $this->where('name_en', $name_en)->first();
    }
}
