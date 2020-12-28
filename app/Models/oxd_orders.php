<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oxd_orders extends Model
{
    use HasFactory;
    // Table Name
  protected $table = 'oxd_orders';
  // Primary Key
  public $primarykey = 'id';
  // Timestamp
  public $timestamps = true;

}
