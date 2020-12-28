<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oxd_pinrequest extends Model
{
    use HasFactory;

    // Table Name
  protected $table = 'oxd_pinrequest';
  // Primary Key
  public $primarykey = 'id';
  // Timestamp
  public $timestamps = true;
}
