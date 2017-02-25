@extends('master')
@section('body')
    <div class="container">
        <div class="col-sm-9">
            <h2>Senden Sie uns eine E-Mail</h2>
            <p class="text-justify">Möchten Sie pünktlich von Ihrem Chauffeur abgeholt werden und einen angenehmen und reibungslosen Transfer haben? Dann sind Sie bei uns genau richtig! Überzeugen Sie sich von unserem professionellen Service. Zögern Sie nicht und kontaktieren Sie uns unter der folgenden Telefonnummer <strong>+43 (0) 660 700 3 600</strong> oder schreiben Sie uns an <a href="mailto:office@vienna-cab2airport.at">office@vienna-cab2airport.at</a></p>
            <p>Wir sind von 08:00-22:00 Uhr telefonisch für Sie erreichbar und stehen Ihnen gerne zur Verfügung.</p>
            <hr>
            {!! Form::open(['class'=>'form-horizontal']) !!}
            <div class="form-group">
                <label class="col-sm-4 control-label">Name</label>
                <div class="col-sm-8">{!! Form::text('ime',null,['class'=>'form-control','placeholder'=>'Name']) !!}</div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}</div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Telefon</label>
                <div class="col-sm-8">{!! Form::text('telefon',null,['class'=>'form-control','placeholder'=>'Telefon']) !!}</div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Nachricht</label>
                <div class="col-sm-8">{!! Form::textarea('poruka',null,['class'=>'form-control','placeholder'=>'Nachricht']) !!}</div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-8">{!! Form::submit('Send',['class'=>'btn btn-primary']) !!}</div>
            </div>
            {!! Form::close() !!}
        </div><div class="col-sm-3"><img src=img/right.jpg></div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85303.7430108546!2d16.49653569338815!3d48.11583541452608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c55ab471abe9b%3A0x247a52108dd29b4b!2sFlughafen+Wien+(VIE)!5e0!3m2!1sde!2sde!4v1469956534367" width=1232 height=450 frameborder=0 style=border:0 allowfullscreen></iframe>
@endsection