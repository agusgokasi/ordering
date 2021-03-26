<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
        'price',
        'status',
    ];
    // relation with Order
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
