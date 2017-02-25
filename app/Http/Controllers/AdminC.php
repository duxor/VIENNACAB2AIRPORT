<?php

namespace App\Http\Controllers;

use App\Rezervacija;
use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;

class AdminC extends Controller{
    public function getIndex(){
        $rezervacije['danas']=Rezervacija::
            join('region as r','r.id','=','rezervacija.region_id')
            ->join('kvart as k','k.id','=','rezervacija.kvart_id')
            ->join('ulica as u','u.id','=','rezervacija.ulica_id')
            ->whereDate('vrijeme','=',date('Y-m-d'))
            ->get([
                'vrijeme',
                'pravac',
                'r.name as region',
                'k.name as kvart',
                'k.number as kvart_number',
                'u.name as ulica',
                'ime',
                'email',
                'telefon']);
        $rezervacije['sutra']=Rezervacija::whereDate('vrijeme','=',Carbon::tomorrow()->format('Y-m-d'))->get();
        return view('admin.index')->with(compact('rezervacije'));
    }
}
