<?php

namespace App\Http\Controllers;

use App\Kvart;
use App\Region;
use App\Ulica;
use Illuminate\Http\Request;

use App\Http\Requests;

class OsnovniC extends Controller{
    public function getIndex(){
        return view('index');
    }
    public function getKontakt(){
        return view('kontakt');
    }
    public function postKontakt(){
        dd("THIS IS TEST APP!!");
        return view('kontakt');
    }
    public function getService(){
        return view('usluge');
    }
    public function getPreis(){
        $podaci=new RezervacijaC();
        $podaci=$podaci->postConfig();
        return view('cijene')->with(compact('podaci'));
    }
}
