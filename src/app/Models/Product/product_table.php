<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_table extends Model
{
    protected $table = 'product_table';
    protected $primaryKey = 'id';
    public $timestamps = false;

    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'last_updated';
}
