<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medjustanica extends Model{
    protected $table='medjustanica';
    protected $fillable=['kvart_id_1','kvart_id_2','cijena'];
}
