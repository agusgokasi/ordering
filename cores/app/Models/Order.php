<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'menu_id',
        'qty',
        'price',
        'status',
    ];
    // relation with Menu
    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
}
