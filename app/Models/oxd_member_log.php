<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oxd_member_log extends Model
{
    use HasFactory;
    // Table Name
  protected $table = 'oxd_member_log';
  // Primary Key
  public $primarykey = 'id';
  // Timestamp
  public $timestamps = false;

}
