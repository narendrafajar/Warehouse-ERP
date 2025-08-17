<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'category_id',
        'supplier_id',
        'product_name',
        'price',
        'disc',
        'moq',
        'supplier_name',
        'sale_vol'
    ];
}
