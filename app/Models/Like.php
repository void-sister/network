<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $table = 'likeable';

  //should not be at all!!!
  protected $fillable = [
    'user_id',
    'likeable_id',
    'likeable_type'
  ];

  public function likeable()
  {
    return $this->morphTo();
  }

  public function user()
  {
    return $this->belongsTo('App\Models\User', 'user_id');
  }
}
