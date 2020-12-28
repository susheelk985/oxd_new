<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oxd_payments extends Model
{
    use HasFactory;
    //table name
    protected $table = 'oxd_payments';
    //primary key
    public $primarykey = 'id';
    //timestaps
    public $timestamps = true;

}
