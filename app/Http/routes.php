<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::any('/rezervacija-config', function () {
    $region=\App\Region::get(['id','name']);
    $kvart=[];
    $ulica=[];
    foreach($region as $r){
        $kvart[$r['id']] = \App\Kvart::where('region_id',$r['id'])->get(['id','name','l','k','v','region_id'])->toArray();
        $ulica[$r['id']]=[];
        foreach($kvart[$r['id']] as $k){//dd($k,\App\Ulica::where('kvart_id',$k['id'])->get(['id','name'])->toArray());
            $ulica[$r['id']][$k['id']] = \App\Ulica::where('kvart_id',$k['id'])->get(['id','name'])->toArray();
        }
    }//dd($ulica);
    return json_encode([
        'region' => $region,
        'kvart' => $kvart,
        'ulica' => $ulica,
    ]);
});
Route::get('/test-1', function () {
    return view('rezervacija');
});
Route::get('/test', function () {
    /*$testRegion=1;
    $testKvart=1;
    foreach(\App\Region::all() as $i => $region) if($i+1!=$region->id) dd($i,$region->id);
    foreach(\App\Kvart::all() as $i => $region) if($i+1!=$region->id) dd($i,$region->id);
    dd($testKvart,$testRegion);*/

    $ispis='Region::insert([';
    foreach(\App\RRegion::all() as $region) $ispis.='["id"=>"'.$region->id.'","name"=>"'.$region->ortname.'"],';
    $ispis.=']);Kvart::insert([';
    $nemoguci='';
    foreach(\App\KKvart::all() as $kvart)
        if(\App\RRegion::where('id',$kvart->ortlisteID)->exists()) $ispis.='["id"=>"'.$kvart->id.'","name"=>"'.$kvart->plz.'","region_id"=>"'.$kvart->ortlisteID.'","l"=>"'.$kvart->limo.'","k"=>"'.$kvart->kombi.'","v"=>"'.$kvart->van.'"],';
    else $nemoguci.='["id"=>"'.$kvart->id.'","name"=>"'.$kvart->plz.'","region_id"=>"'.$kvart->ortlisteID.'","l"=>"'.$kvart->limo.'","k"=>"'.$kvart->kombi.'","v"=>"'.$kvart->van.'"],';
    $ispis.=']);Ulica::insert([';
    $nemoguciulica='';
    foreach(\App\UUlica::all() as $ulica)
        if(\App\KKvart::where('id',$ulica->plzlisteID)->exists()) $ispis.='["id"=>"'.$ulica->id.'","name"=>"'.$ulica->name.'","kvart_id"=>"'.$ulica->plzlisteID.'"],';
    else $nemoguciulica.='["id"=>"'.$ulica->id.'","name"=>"'.$ulica->name.'","kvart_id"=>"'.$ulica->plzlisteID.'"],';
    $ispis.=']);';

    dd($ispis,$nemoguci,$nemoguciulica);
});
