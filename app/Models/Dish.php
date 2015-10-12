<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price',

    ];


    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'order_dish');
    }
}