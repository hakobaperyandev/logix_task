<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['type'];

    public function companies() 
    {
        return $this->belongsToMany(Company::class, 'company_orders');
    }
}
