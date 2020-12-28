<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oxd_product_category extends Model
{
    use HasFactory;
    // Table Name
  protected $table = 'oxd_product_category';
  // Primary Key
  public $primarykey = 'category_id';

}
