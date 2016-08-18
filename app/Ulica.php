<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulica extends Model{
    protected $table='ulica';
    protected $fillable=['name','kvart_id'];
}
