<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_Registration extends Model
{
    use HasFactory;

    // Table Name
  protected $table = 'oxd_plans';
  // Primary Key
  public $primarykey = 'id';
  // Timestamp
  public $timestamps = true;

  
}
