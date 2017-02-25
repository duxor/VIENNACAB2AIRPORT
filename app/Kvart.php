<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kvart extends Model{
    protected $table='kvart';
    protected $fillable=['number','name','l','k','v','region_id'];
}
