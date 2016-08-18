@extends('master')
@section('body')
    <div class="container">
        <div class="col-sm-5">
            {!! Form::select('region',[],null,['class'=>'form-control']) !!}
            {!! Form::select('kvart',[],null,['class'=>'form-control']) !!}
            {!! Form::select('ulica',[],null,['class'=>'form-control']) !!}
        </div>
    </div>
@endsection
@section('script')
    <script>
        var region=[];
        var kvart=[];
        var ulica=[];
        $(function(){
            rezervacija.init();

        });
        var rezervacija={
            init:function(){console.log(1);
                $.post('/rezervacija-config',{_token:'{{csrf_token()}}'},function(data){
                    data=JSON.parse(data);console.log(data);
                    region=data.region;
                    kvart=data.kvart;
                    ulica=data.ulica;
                    rezervacija.selectCreator('region',region);
                    rezervacija.selectCreator('kvart',kvart[region[0]['id']]);
                    rezervacija.selectCreator('ulica',ulica[region[0]['id']][kvart[region[0]['id']][0]['id']]);
                    $('[name=region]').change(function(){
                        rezervacija.selectCreator('kvart',kvart[region[$(this).val()]['id']]);
                        rezervacija.selectCreator('ulica',ulica[region[$(this).val()]['id']][kvart[region[$(this).val()]['id']][$(this).val()]['id']]);
                    });
                    $('[name=kvart]').change(function(){ alert(2); });
                    $('[name=ulica]').change(function(){ alert(3); });
                })
            },
            selectCreator:function(name,data){
                var ispis='';
                $.each(data,function(i,d){
                    ispis += '<option value="' + d['id'] + '">' + d['name'] + '</option>';
                })
                $('[name='+name+']').html(ispis)
            }
        };
    </script>
@endsection