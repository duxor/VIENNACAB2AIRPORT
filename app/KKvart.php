<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KKvart extends Model{
    protected $table='plzliste';
    protected $fillable=['name','l','k','v','region_id'];
}
