<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Primary key for the table Product
     */
    protected $primaryKey = "p_id";

    protected $fillable = ['name', 'item_number', 'description', 'price'];

}
