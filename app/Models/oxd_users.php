<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class oxd_users extends Authenticatable
{
    use HasFactory, Notifiable;
    // Table Name
  protected $table = 'oxd_users';
  // Primary Key
  public $primarykey = 'id';
  // Timestamp
  public $timestamps = true;

 //protected $guard='users';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name',
      'mobile',
      'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password',
      'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'mobile_verified_at' => 'datetime',
  ];
}
