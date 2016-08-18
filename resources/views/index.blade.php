@extends('master')
@section('body')
    <section class="container first text-center">
        <div class="col-sm-4 nav-mdux">
            <h1>Vienna airport taxi</h1>
            <h2>Online-Bestellung schnell und einfach</h2>
            <a href="" class="btn btn-lg btn-default btn-dux-lblue">Bestellen</a>
            <img src="/img/cc.jpg" width="100%">
            <h3>(+43) 660 700 36 00</h3>
        </div>
        <div class="col-sm-8">
            <div id="sliderID" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#sliderID" data-slide-to="0" class="active"></li>
                    <li data-target="#sliderID" data-slide-to="1"></li>
                    <li data-target="#sliderID" data-slide-to="2"></li>
                    <li data-target="#sliderID" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img width="900" height="599" title="Vienna aitport taxi - Cab" src="img/slider/vienna-cab-airport-aeroplane.jpg" alt="EIN PROFESSIONELLES SERVICE" name="VC2A"><!--width="900" height="599"-->
                        <div class="carousel-caption">
                            <h2>Vienna Taxi</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img title="Vienna aitport taxi - Cab" src="img/slider/vienna-cab-airport-mercedes-3.jpg" alt="Vienna Cab2 airport taxi" width="900" height="599"><!--width=900 height=599-->
                        <div class="carousel-caption">
                            <h2>Vienna Taxi</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img title="Vienna aitport taxi - Cab" src="img/slider/vienna-cab-airport-mercedes-1.jpg" alt="flughafen" width="900" height="599"><!--width=860 height=381-->
                        <div class="carousel-caption">
                            <h2>Vienna Taxi</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img title="Vienna aitport taxi - Cab" src="img/slider/vienna-cab-airport-mercedes-2.jpg" alt="Limousinenservice in Wien" width="900" height="599"><!--width=900 height=599-->
                        <div class="carousel-caption">
                            <h2>Vienna Taxi</h2>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#sliderID" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#sliderID" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="blue">
        <div class="container">
            <div class="col-sm-3">
                <i><img title="Vienna aitport taxi - Cab" src="img/zum.png" alt="Vienna airport taxi - zum" width="70" height="70"></i>
                <h4>Taxi ZUM Flughafen</h4>
                <p>Hier können Sie ein Taxi zum Flughafen bestellen.</p>
            </div>
            <div class="col-sm-3">
                <i><img title="Vienna aitport taxi - Cab" src="img/vom.png" alt="Vienna airport taxi - vom" width="70" height="70"></i>
                <h4>Taxi VOM Flughafen</h4>
                <p>Hier können Sie ein Taxi vom Flughafen bestellen.</p>
            </div>
            <div class="col-sm-3">
                <i><img title="Vienna aitport taxi - Cab" src="img/price.png" alt="Vienna airport taxi - vom" width="70" height="70"></i>
                <h4>Preisekalkulator</h4>
                <p>Rechnen Sie den Preis aus.</p>
            </div>
            <div class="col-sm-3">
                <i><img title="Vienna aitport taxi - Cab" src="img/contact.jpg" alt="Vienna airport taxi - vom" width="70" height="70"></i>
                <h4>Kontaktieren Sie uns</h4>
                <p>Für Preisauskünfte oder andere Fragen zu unseren Diensten kontaktieren Sie uns bitte.</p>
            </div>
        </div>
    </section>

    <section class="container text-center">
        <h1>Ihr zuverlässiger Flughafentransfer - Limousinenservice in Wien</h1>
        <p>
            Ein professionelles Service mit höchster Qualität und besten Preisen möchten wir unseren Kunden bieten. Pünktlichkeit, Zuverlässigkeit und Freundlichkeit stehen bei uns an erster Stelle, genauso wie die Kundenzufriedenheit.
        </p>
        <div class="row text-justify">
            <div class="col-sm-6">
                <p>Möchten Sie ein günstiges Flughafentaxi in Anspruch nehmen, welches Sie zu jeder Uhrzeit verlässlich abholt und zu einem Fixpreis von einem zum anderen Ort bringt? Wir bieten sowohl Flughafentransfers, als auch Cityfahrten (Taxifahrten innerhalb von Wien und Umgebung) und Auslandsfahrten auf Anfrage an. Wir kümmern uns darum, dass Sie trotz Flugverspätung rechtzeitig vom Flughafen abgeholt werden.</p>
                <p>Unsere Chauffeure sind zuvorkommend und hilfsbereit, sie garantieren für eine angenehme und reibungslose Fahrt. Ein gepflegtes Erscheinungsbild der Fahrer, sowie perfekte Ortskenntnisse und sehr gute Deutschkenntnisse haben bei uns höchste Priorität. Selbstverständlich sind bei uns auch sehr gute Englischkenntnisse Voraussetzung, um auch unsere internationalen Kunden betreuen zu können.</p>
                <p>Es ist uns ein großes Anliegen, einen positiven Eindruck unserer Serviceleistungen zu hinterlassen. Unser Ziel ist, auf die Wünsche unserer Kunden einzugehen und deren Vertrauen zu gewinnen.</p>
                <h2>Ihr Vienna Cab2Airport Team freut sich über Ihre Bestellung!</h2>
            </div>
            <div class="col-sm-6">
                <p>Would you like to take a cheap airport taxi which pick you up reliably at any time and which bring you to a fixed - price from one to another place? We offer both airport transfers, as well as city trips (taxi rides within and around Vienna) and international trips on request.</p>
                <p>We make sure that you will be picked up from the airport on time despite flight delay. Our drivers are courteous and helpful, they guarantee a comfortable and smooth ride. A neat appearance of the drivers, as perfect location skills and very good knowledge of German are of the highest priority.</p>
                <p>Of course, very good knowledge of English is requirement that they can also serve our international customers. It is very important for us to leave a positive impression of our services. Our goal is to respond to requests of our customers and to gain their trust.</p>
                <h2>Your Vienna Cab2Airport team looks forward to your order!</h2>
            </div>
        </div>
        <h2 class="mt100">Vienna Cab2 Airport <a title="Vienna airport cab - Taxi" href=tel:436607003600 class="style5">(+43) 660 700 36 00</a></h2>
    </section>
@endsection