<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Soho</title>
        
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">
        
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1623647431227519";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script>!function(d,s,id) {
            var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
            if(!d.getElementById(id)){js=d.createElement(s);
                js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js,fjs);
            }}(document, 'script', 'twitter-wjs');
        </script>
    <!-- body here -->

        <div class="content">
            <img src="/img/header-with-logo.png">
            <div class="fb-button">
                <div class="fb-share-button" data-href="https://www.facebook.com/canonromania" data-layout="button"></div>
            </div>

            <div class="tw-button">
                <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
            </div>

            <img class="premii" src="/img/premii.png">
                <span class="img-premii-laser">Echipament Laser</span>
                <span class="img-premii-router">Router wifi</span>
                <span class="img-premii-scanner">Scanner Mobil</span>
                <span class="img-premii-rucsac">Rucsac</span>
            
            <span class="text-bulina">Cadou router wifi sau rucsac</span>
            
            <p class="big-text">Aleg să-mi urmez visele.</p>
            <p class="big-text-sec">Alegerea mea este Canon.</p>

            <p class="text-norm par1">Atingerea obiectivelor propriei afaceri stă în mâinile echipe tale.</p>
            <p class="text-norm par2">Echipamentele pot face diferenta. Alege Canon si poti beneficia de solutia perfectă.</p>
            <p class="text-norm par3">În plus, pentru produsele achizitionate din gama imprimantelor laser si scannerelor mobile vei primi, 
            la alegere, un router wifi sau un rucsac. Mai multe detalii în magazinele partenere Canon.</p>

            <div class="stripe-red"></div>
        </div>

    <!-- /body here -->
        
        <script type="text/javascript" src="/js/lib/lodash.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
        
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-55513824-6']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>
    </body>
</html>