<?php

namespace App\Http\Controllers;

use App\Kvart;
use App\Medjustanica;
use App\Region;
use App\Rezervacija;
use App\Ulica;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class RezervacijaC extends Controller{
    public function postConfig(){
        $region=Region::get(['id','name']);
        $kvart=[];
        $ulica=[];
        foreach($region as $r){
            $kvart[$r['id']] = Kvart::where('region_id',$r['id'])->get(['id','number','name','l','k','v','region_id'])->toArray();
            $ulica[$r['id']]=[];
            foreach($kvart[$r['id']] as $k){
                $ulica[$r['id']][$k['id']] = Ulica::where('kvart_id',$k['id'])->get(['id','name'])->toArray();
            }
        }
        $medjustanica=Medjustanica::get(['kvart_id_1','kvart_id_2','cijena']);
        return json_encode([
            'region' => $region,
            'kvart' => $kvart,
            'ulica' => $ulica,
            'medjustanica' => $medjustanica
        ]);
    }

    public function getIndex(){
        $podaci=new RezervacijaC();
        $podaci=$podaci->postConfig();
        return view('rezervacija')->with(compact('podaci'));
    }
    public function postIndex(Requests\RezervacijaR $podaci){
        $podaci=$podaci->except(['_token']);
        foreach($podaci as $i=>$p) if($p=='-1') unset($podaci[$i]);
        Rezervacija::insert([$podaci]);
        dd("THIS IS TEST APP!!");
        dd($podaci);
    }
}
