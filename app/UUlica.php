<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UUlica extends Model{
    protected $table='strasseliste';
    protected $fillable=['name','kvart_id'];
}
