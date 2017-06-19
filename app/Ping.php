<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ping extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['title', 'description', 'organization', 'longitude', 'latitude', 'status'];
}
