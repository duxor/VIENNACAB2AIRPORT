@extends('master')
@section('body')
    <section id=who-we-are class="page-section border-tb">
        <div class="container who-we-are">
            <div class="section-title text-left">
                <h2 class=title> Senden Sie uns eine E-Mail </h2>
            </div>
            <div class=row>
                <div class=col-md-8>
                    <div class=row>
                        <div class=col-md-12>
                            Möchten Sie pünktlich von Ihrem Chauffeur abgeholt werden und einen angenehmen und reibungslosen Transfer haben?
                            Dann sind Sie bei uns genau richtig!
                            Überzeugen Sie sich von unserem professionellen Service.
                            Zögern Sie nicht und kontaktieren
                            Sie uns unter der folgenden Telefonnummer <strong>+43 (0) 660 700 3 600</strong> oder schreiben Sie uns an <a href=mailto:office@vienna-cab2airport.at><strong><em>
                                        <p>office@vienna-cab2airport.at</p></em></strong></a>Wir sind von 08:00-22:00 Uhr telefonisch für Sie erreichbar und stehen Ihnen gerne zur Verfügung.



                            <form action="contact.php" class="form-horizontal text-left">
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Name*</label>
                                    <div class="col-sm-8"><input name="name" class="form-control" placeholder="Name..."></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Email*</label>
                                    <div class="col-sm-8"><input name="email" type="email" class="form-control" placeholder="Email..."></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Telefon</label>
                                    <div class="col-sm-8"><input name="telefon" class="form-control" placeholder="Telefon..."></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Nachricht*</label>
                                    <div class="col-sm-8"><textarea name="nachricht" class="form-control" placeholder="Nachricht..."></textarea></div>
                                </div>
                            </form>








                        </div>
                    </div>
                </div>
                <div class=col-md-4>
                    <img src=img/right.jpg>
                </div>
                <br clear="all">
                <br clear="all">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85303.7430108546!2d16.49653569338815!3d48.11583541452608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c55ab471abe9b%3A0x247a52108dd29b4b!2sFlughafen+Wien+(VIE)!5e0!3m2!1sde!2sde!4v1469956534367" width=1232 height=450 frameborder=0 style=border:0 allowfullscreen></iframe>
            </div>
        </div>
    </section>
@endsection