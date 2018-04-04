<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'name',
        'mileage',
        'categories_id'
        ];

    public function category()
    {
        return $this->belongsTo('App\model\Category');
    }
}
