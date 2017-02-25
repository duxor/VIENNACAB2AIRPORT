@extends('master')
@section('body')
    <style type="text/css">
        #map {
            width: 100%;
            height: 400px;
            margin-top: 10px;
        }
        .form-group{margin-bottom: 0}
    </style>
    <link href="/pickadatejs/lib/themes/default.css" rel="stylesheet">
    <link href="/pickadatejs/lib/themes/default.time.css" rel="stylesheet">
    <div class="container">
        <div class="col-sm-7 form-horizontal">
            <div class="form-group">
                <label class="col-sm-4 control-label">Ort</label>
                <div class="col-sm-8">
                    {!! Form::select('region',[],null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Plz</label>
                <div class="col-sm-8">
                    {!! Form::select('kvart',[],null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Strasse</label>
                <div class="col-sm-8">
                    {!! Form::select('ulica',[],null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Abholzeit</label>
                <div class="col-sm-8">
                    {!! Form::text('vrijeme',null,['class'=>'form-control timepicker']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Typ Auto</label>
                <div class="col-sm-8">
                    {!! Form::select('vozilo',['l'=>'Limousine max. 3 Personen','k'=>'Kombi 3-4 Personen','v'=>'Mini Van 4-8 Personen'],null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Koffer</label>
                <div class="col-sm-8">
                    {!! Form::select('kofer',['-1'=>'Keine',1=>'1 Koffer',2=>'2 Koffer',3=>'3 Koffer',4=>'4 Koffer (Kombi)',5=>'5 Koffer (Mini Van)',6=>'6 Koffer (Mini Van)',7=>'7 Koffer (Mini Van)',8=>'8 Koffer (Mini Van)'],null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Handgepäck</label>
                <div class="col-sm-8">
                    {!! Form::select('rucniKofer',['-1'=>'Keine',1=>'1 Handgepäck',2=>'2 Handgepäck',3=>'3 Handgepäck',4=>'4 Handgepäck',5=>'5 Handgepäck',6=>'6 Handgepäck',7=>'7 Handgepäck (Mini Van)',8=>'8 Handgepäck (Mini Van)'],null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Zusatzadresse</label>
                <div class="col-sm-8">
                    {!! Form::select('tacka1',[],null,['class'=>'form-control citajRutu']) !!}
                    {!! Form::select('tacka2',[],null,['class'=>'form-control citajRutu']) !!}
                    {!! Form::select('tacka3',[],null,['class'=>'form-control citajRutu']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Kindersitz</label>
                <div class="col-sm-8">
                    {!! Form::select('beba',[0=>'Nein',1=>'Ja'],null,['class'=>'form-control','data-cijena'=>5]) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Kindersitzerhöhung</label>
                <div class="col-sm-8">
                    {!! Form::select('boost',[0=>'Nein',1=>'Ja'],null,['class'=>'form-control','data-cijena'=>2]) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Preis</label>
                <div class="col-sm-8"><h1 id="cijena">€ 0.00</h1></div>
            </div>
        </div>
        <div class="col-sm-5">
            <div id="map"></div>
            <div id="distance"></div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/pickadatejs/lib/picker.js"></script>
    <script src="/pickadatejs/lib/picker.time.js"></script>
    <script>
        function init(){
            rezervacija.init(<?php echo $podaci;?>);
        }
        var rezervacija={
            pravac:0,//0->from airport,1->to airport
            region:[],
            kvart:[],
            ulica:[],
            medjustanica:[],
            nightHours:[23, 24, 0, 1, 2, 3, 4],
            time:'',
            init:function(data){
                rezervacija.region=data.region;
                rezervacija.kvart=data.kvart;
                rezervacija.ulica=data.ulica;
                rezervacija.medjustanica=data.medjustanica;
                rezervacija.selectCreator('region',rezervacija.region);
                rezervacija.selectCreator('kvart',rezervacija.kvart[rezervacija.region[0]['id']],1);
                rezervacija.selectCreator('ulica',rezervacija.ulica[rezervacija.region[0]['id']][rezervacija.kvart[rezervacija.region[0]['id']][0]['id']]);
                rezervacija.time=$('.timepicker').pickatime({
                    clear: '',
                    format: 'HH:i',
                    formatSubmit:'HH',
                    interval: 60,
                    formatLabel: function(time){
                        return  'HH:i <sm!all>' + ( rezervacija.nightHours.indexOf(parseInt((time.pick/60).toFixed(0)))>=0 ? 'N!ig!ht pr!ice' : 'D!ay pr!ice' ) +'</sm!all>'
                    },
                    onSet:function(){ rezervacija.calculatePreis() }
                });
                $('[data-cijena],[name=vozilo]').change(function(){rezervacija.calculatePreis()});
                rezervacija.selectCreator('tacka1',rezervacija.kvart[rezervacija.region[0]['id']],1,1);
                rezervacija.selectCreator('tacka2',rezervacija.kvart[rezervacija.region[0]['id']],1,1);
                rezervacija.selectCreator('tacka3',rezervacija.kvart[rezervacija.region[0]['id']],1,1);
                $('[name=region]').change(function(){
                    rezervacija.selectCreator('kvart',rezervacija.kvart[$('[name=region]').val()],1);
                    rezervacija.selectCreator('ulica',rezervacija.ulica[$('[name=region]').val()][$('[name=kvart]').find('option:selected').val()]);
                });
                $('[name=kvart]').change(function(){
                    rezervacija.selectCreator('ulica',rezervacija.ulica[$('[name=region]').val()][$(this).val()]);
                });
                $('[name=region],[name=kvart],[name=ulica],.citajRutu').change(function(){
                    rezervacija.calculateRoute();
                    rezervacija.calculatePreis();
                });
                $('#bToAirport').click(function(){
                    rezervacija.pravac=1;
                    rezervacija.calculateRoute()
                });
                $('#bFromAirport').click(function(){
                    rezervacija.pravac=0;
                    rezervacija.calculateRoute()
                });
                rezervacija.calculateRoute();
                rezervacija.calculatePreis();
            },
            selectCreator:function(name,data,kvart,nul){
                var ispis=nul?'<option value="-1"></option>':'';
                $.each(data,function(i,d){
                    ispis += '<option value="' + d['id'] + '">' + (kvart?d['number']+' - ':'') + d['name'] + '</option>';
                })
                $('[name='+name+']').html(ispis)
            },
            calculateRoute:function(){
                var airport=new google.maps.LatLng(48.124365, 16.558418);
                var to=$('[name=region]').find('option:selected').text()+', '+$('[name=kvart]').find('option:selected').text();
                var myOptions = {
                    zoom: 10,
                    center: airport,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
                var directionsService = new google.maps.DirectionsService();
                var directionsRequest = {
                    origin: rezervacija.pravac ? to : airport,
                    destination: rezervacija.pravac ? airport : to,
                    travelMode: google.maps.DirectionsTravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.METRIC,
                    region: 'at'
                };
                var stajanke=[];
                if($('[name=tacka1]').val()>0) stajanke.push({location: $('[name=tacka1]').find('option:selected').text()});
                if($('[name=tacka2]').val()>0) stajanke.push({location: $('[name=tacka2]').find('option:selected').text()});
                if($('[name=tacka3]').val()>0) stajanke.push({location: $('[name=tacka3]').find('option:selected').text()});
                if(stajanke.length) directionsRequest.waypoints=stajanke;
                directionsService.route(
                    directionsRequest,
                    function(response, status){
                        if (status == google.maps.DirectionsStatus.OK){
                            var s=0, t=0;
                            for(var i=0, max=response.routes[0].legs.length; i<max; i++){
                                s+=response.routes[0].legs[0].distance.value;
                                t+=response.routes[0].legs[0].duration.value;
                            }
                            $('#distance').html((s/1000).toFixed(1)+' km<br>'+(t/60).toFixed(0)+' '+response.routes[0].legs[0].duration.text.split(' ')[1]);
                            new google.maps.DirectionsRenderer({
                                map: mapObject,
                                directions: response
                            })
                        }
                        else $("#error").append("Unable to retrieve your route<br />")
                    }
                )
            },
            calculatePreis:function(){
                var cijena=0;
                cijena+=
                        parseFloat(
                                rezervacija.kvart[$('[name=region]').find('option:selected').val()].find(function(el){return el.id==$('[name=kvart]').find('option:selected').val()})[$('[name=vozilo]').find('option:selected').val()]
                        );
                if(rezervacija.time)
                    if(rezervacija.time.pickatime('picker').get('select'))
                        if(rezervacija.nightHours.indexOf(rezervacija.time.pickatime('picker').get('select').hour)>=0)
                            cijena+=5;
                $.each($('[data-cijena]'),function(i,v){
                    cijena+=$(v).val()>0?parseFloat($(v).data('cijena')):0;
                });
                cijena+=rezervacija.costMedjustanica(3);
                $('#cijena').html('€ '+cijena);
            },
            costMedjustanica:function(i,j){
                if(i<1) return 0;
                if(j) return rezervacija.isset(i)? parseFloat($('[name=tacka'+i+']').find('option:selected').val()) : rezervacija.costMedjustanica(i-1,true);
                return rezervacija.findMedjustanica(rezervacija.isset(i)?parseFloat($('[name=tacka'+i+']').find('option:selected').val()):0,i>1?rezervacija.costMedjustanica(i-1,true):0)+rezervacija.costMedjustanica(i-1);
            },
            findMedjustanica:function(i1,i2,num){
                if(i1==0) return 0;
                if(i2==0) return typeof(num) == 'undefined'|| num<0 ? rezervacija.findMedjustanica(i1,$('[name=kvart]').find('option:selected').val(),rezervacija.medjustanica.length-1) : rezervacija.findMedjustanica(i1,i1,rezervacija.medjustanica.length-1);
                if(typeof(num)=='undefined'||num<0) return rezervacija.findMedjustanica(i1,i2,rezervacija.medjustanica.length-1);
                if(rezervacija.medjustanica[num]['kvart_id_1']==i1 && rezervacija.medjustanica[num]['kvart_id_2']==i2)
                    return parseFloat(rezervacija.medjustanica[num]['cijena']);
                else return rezervacija.findMedjustanica(i1,i2,num-1);
            },
            isset:function(i){
                return $('[name=tacka'+i+']').find('option:selected').val() ? parseInt($('[name=tacka'+i+']').find('option:selected').val()) > -1 ?  true : false : false;
            }
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVaetobEYNyWpnhQXSJhNhSK4bbAnIIgo&language=de&callback=init"></script>
@endsection