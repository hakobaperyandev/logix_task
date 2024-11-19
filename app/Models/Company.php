<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'email'];

    public function orders() 
    {
        return $this->belongsToMany(Order::class, 'company_orders');
    }

    public function contracts() {
        return $this->hasMany(CompanyOrder::class, 'company_orders');
    }
}
