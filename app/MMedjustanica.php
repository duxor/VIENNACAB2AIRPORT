<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MMedjustanica extends Model{
    protected $table='zusatzpreis';
    protected $fillable=['plz','zusatz1','preis'];
}
