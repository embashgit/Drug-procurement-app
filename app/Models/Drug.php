<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $fillable = [
        'description',
        'image',
        'name',
        'qtypack',
        'qtycarton',
        'price',
        'delivery', 
        'supplier', 
        'voucher', 
        'expire_on', 
        'manufacturer', 
        'produce_at', 
        'cost_carton', 
        'cost_pack', 
        'receipt_no', 
        'in_store', 
        'destination'
    ]; 
}



           