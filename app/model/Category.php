<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description'
        ];

    public function articles()
    {
        return $this->hasMany('App\model\Article');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
