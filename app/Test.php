<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model{
    public static function kreiranjeSeedPodatakaMedjustanica(){
        $ispis='Medjustanica::insert([';
        foreach(\App\MMedjustanica::all() as $medjustanica){
            if(!$k1=\App\Kvart::where('number',$medjustanica->plz)->get(['id'])->first()) continue;
            if(!$k2=\App\Kvart::where('number',$medjustanica->zusatz1)->get(['id'])->first()) continue;
            $ispis.="[\"kvart_id_1\"=>\"".$k1->id."\",\"kvart_id_2\"=>\"".$k2->id."\",\"cijena\"=>\"".$medjustanica->preis."\"],\n";
        }
        $ispis.=']);';
        dd($ispis);
    }
    public static function kreiranjeSeedPodatakaFULL(){
        /*$testRegion=1;
        $testKvart=1;
        foreach(\App\Region::all() as $i => $region) if($i+1!=$region->id) dd($i,$region->id);
        foreach(\App\Kvart::all() as $i => $region) if($i+1!=$region->id) dd($i,$region->id);
        dd($testKvart,$testRegion);*/
    
            $ispis="<?php\n\n
        use Illuminate\\Database\\Seeder;\n
        use App\\Region;\n
        use App\\Kvart;\n
        use App\\Ulica;\n
        use App\\Medjustanica;\n\n
        class KonfiguracioniPodaci extends Seeder{\n
            public function run(){\n
                Region::insert([\n";
        foreach(\App\RRegion::all() as $region)
            $ispis.="[\"id\"=>\"".$region->id."\",\"name\"=>\"".preg_replace('/\s+/', ' ',$region->ortname)."\"],\n";
        $ispis.="]);\n\n";

        $ispis.="Kvart::insert([";
        $nemoguci="";
        foreach(\App\KKvart::all() as $kvart)
            if(\App\RRegion::where('id',$kvart->ortlisteID)->exists())
                $ispis.="[\"id\"=>\"".$kvart->id."\",\"number\"=>\"".$kvart->plz."\",\"name\"=>\"".preg_replace('/\s+/', ' ',$kvart->name)."\",\"region_id\"=>\"".$kvart->ortlisteID."\",\"l\"=>\"".$kvart->limo."\",\"k\"=>\"".$kvart->kombi."\",\"v\"=>\"".$kvart->van."\"],\n";
            else $nemoguci.='["id"=>"'.$kvart->id.'","name"=>"'.$kvart->plz.'","region_id"=>"'.$kvart->ortlisteID.'","l"=>"'.$kvart->limo.'","k"=>"'.$kvart->kombi.'","v"=>"'.$kvart->van.'"],';
        $ispis.="]);\n\n";

        $ispis.="Ulica::insert([";
        $nemoguciulica='';
        foreach(\App\UUlica::all() as $ulica)
            if(\App\KKvart::where('id',$ulica->plzlisteID)->exists())
                $ispis.="[\"id\"=>\"".$ulica->id."\",\"name\"=>\"".preg_replace('/\s+/', ' ',$ulica->name)."\",\"kvart_id\"=>\"".$ulica->plzlisteID."\"],\n";
            else $nemoguciulica.='["id"=>"'.$ulica->id.'","name"=>"'.preg_replace('/\s+/', ' ',$ulica->name).'","kvart_id"=>"'.$ulica->plzlisteID.'"],';
        $ispis.="\n]);\n\n";

        $ispis.='Medjustanica::insert([';
        foreach(\App\MMedjustanica::all() as $medjustanica){
            if(!$k1=\App\Kvart::where('number',$medjustanica->plz)->get(['id'])->first()) continue;
            if(!$k2=\App\Kvart::where('number',$medjustanica->zusatz1)->get(['id'])->first()) continue;
            $ispis.="[\"kvart_id_1\"=>\"".$k1->id."\",\"kvart_id_2\"=>\"".$k2->id."\",\"cijena\"=>\"".$medjustanica->preis."\"],\n";
        }
        $ispis.="\n]);\n\n";
        $ispis.="\n}\n}";

        $f = fopen('KonfiguracioniPodaci.php', 'w');
        fwrite($f,$ispis);
        fclose($f);
        dd(1);
        dd($ispis,$nemoguci,$nemoguciulica);
    }
}
