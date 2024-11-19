<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyOrder extends Model
{
    use HasFactory;
    protected $fillable = ['company_id', 'order_id', 'start', 'end', 'notified'];

    public function companies() {
        return $this->hasMany(Company::class, 'id', 'company_id');
    }
}
