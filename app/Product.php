<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // List of things that van be assigned in mass
    protected $fillable = ['name', 'description', 'price', 'stock'];
}
