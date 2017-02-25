<!DOCTYPE html>
<html lang="de">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="robots" content="NOODP"/>
    <meta name="googlebot" content="NOODP"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="canonical" href="http://vienna-cab2airport.at" />
    <meta name="author" content="Vienna Cab2 Airport"/>

    <title>VIENNA CAB2 AIRPORT - taxi in Vienna - flughafen wien</title>
    <meta name="description" content="Transfer zum Fixpreis! Fahrten vom und zum Flughafen, Citytransfer innerhalb von Wien und Umgebung, zuvorkommende Fahrer die mit dem Gepäck behilflich sind."/>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    {{--<link href="/css/style.css" rel="stylesheet">{{Request::segment(1)==''?'index':Request::segment(1)}}.css--}}
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Trocchi" rel="stylesheet">
    <style>
        #IznadNav{
            background-color: #fff;
            background-image:url('/img/vienna-logo-c-a.png');
            height: 118px
        }
        .red{background-color: #c92136; color:#fff}
        .containera{min-height: 400px; font-size: 120%}
        .containera .voznje *{font-size:100%}
    </style>
    @yield('style')
</head>
<body>
<script type="application/ld+json">
        { "@context": "http://schema.org", "@type": "Organization", "url": "http://www.vienna-cab2airport.at/", "contactPoint": [{ "@type": "ContactPoint", "telephone": "+43-6607003600", "contactType": "customer service" }] }
</script>

<div id="IznadNav"><a href="/"><img src="/img/logo-c.png"></a></div>
<div class="navbar navbar-default navbar-duxor" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a title="Vienna airport cab - Taxi" class="navbar-brand" href="/">
                Cab2Airport Vienna Taxi
                {{--<img title="Vienna aitport taxi - Cab" class="site_logo" alt="Vienna Cab2 airport" width="296" height="86" src="img/logo.png">--}}
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a title="Vienna airport cab - Taxi" class="active" href="/administration">Home</a>
                </li>
                <li class="mega-menu">
                    <a title="Vienna airport cab - Taxi" href="/service">Service</a>
                </li>
                <li>
                    <a title="Vienna airport cab - Taxi" href="/preis">Preis</a>
                </li>
                <li>
                    <a title="Vienna airport cab - Taxi" href="/bestellen">Bestellen</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a title="Vienna airport cab - Taxi" href="/zum-flughafen">ZUM Flughafen</a>
                        </li>
                        <li>
                            <a title="Vienna airport cab - Taxi" href="/vom-flughafen">VOM Flughafen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a title="Vienna airport cab - Taxi" href="/kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid containera">
    @yield('body')
</div>


<div id="IznadNav"><a href="/"><img src="/img/logo-c.png"></a></div>
<section class="container last text-center">
    <p>{{date('Y')}} &copy; CAB2AIRPORT</p>
    <p>Designed and Developed by <a href="mailto:rudi121@gmail.com" title="Rudi mail" target="_blank">rudi</a> & <a href="//dusanperisic.com" title="Dusan Perisic website" target="_blank">duXor</a></p>
</section>

    <script type="text/javascript" src="/js/jquery.min.js"></script>
    @yield('script')
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8" type="text/javascript"></script>
    <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
    <script>
        /*$(document).scroll(function(){
            if($(document).scrollTop()<119){
                $("#IznadNav").slideDown();
                $('#brend').fadeOut();
                $('.navbar-duxor').removeClass('navbar-fixed-top');
                $('.navbar-brand').slideUp();
            }
            else if($(document).scrollTop()>118) {
                $("#IznadNav").slideUp();
                $('#brend').fadeIn();
                $('.navbar-duxor').removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
                $('.navbar-brand').slideDown();
            }
        });*/
        window.fbAsyncInit = function() {
            FB.init({
                appId: "309465932735687",
                xfbml: true,
                version: "v2.7"
            })
        };
        (function(e, a, f) {
            var c, b = e.getElementsByTagName(a)[0];
            if (e.getElementById(f)) {
                return
            }
            c = e.createElement(a);
            c.id = f;
            c.src = "//connect.facebook.net/en_US/sdk.js";
            b.parentNode.insertBefore(c, b)
        }(document, "script", "facebook-jssdk"));
        (function() {
            var a = "015005367612467642198:yx-2mvutvmo";
            var c = document.createElement("script");
            c.type = "text/javascript";
            c.async = true;
            c.src = "https://cse.google.com/cse.js?cx=" + a;
            var b = document.getElementsByTagName("script")[0];
            b.parentNode.insertBefore(c, b)
        })();
    </script>
</body>
</html>