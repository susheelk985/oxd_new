<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oxd_products extends Model
{
    use HasFactory;

    // Table Name
  protected $table = 'oxd_products';
  // Primary Key
  public $primarykey = 'products_id';

}
