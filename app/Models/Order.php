<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';

    protected $fillable = [
        'staff_id',
        'user_id',
    ];
    public function dishes()
    {
        return $this->belongsToMany('App\Models\Dish', 'order_dish');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}