<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'name',
        'description',
        'date_expiration',
        'user_id',
        'mileage',
        'category_id'
        ];

    public function category()
    {
        return $this->belongsTo('App\model\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
