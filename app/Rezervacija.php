<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model{
    protected $table='rezervacija';
    protected $fillable=['ime','email','telefon','region_id','kvart_id','ulica_id','vrijeme','vozilo','kofer','rucniKofer','tacka1','tacka2','tacka3','beba','boost','nacinp','cijena','napomena',];
}
