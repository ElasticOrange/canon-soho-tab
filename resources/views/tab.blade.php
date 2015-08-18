<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Soho</title>
        
        <!-- <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"> -->
        <!-- <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}"> -->
        
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

            <img class="tabel" src="/img/tabel.png">

            <p class="text-bottom">*Imaginile produselor sunt cu titlu de prezentare</p>
            <p class="text-bottom-sec">Perioada promotiei 1 august - 30 septembrie 2015</p>

            <img class="elipse" src="/img/ellipse-bottom.png">
            <span class="abonare">Doreşti să fii la curent cu noutăţile Canon? Abonează-te la newsletter-ul nostru, mai jos.</span>

            <div class="form-inscriere">
                <form action="/" data-form="true" method="post">
                    <label for="nume" class="forlabel">Nume și Prenume</label>
                    <input type="text"  value="{{ old('nume') }}" data-nume="true" name="nume" class="form-control numebox"><br /><br />

                    <label for="email" class="forlabel emaillabel">Email</label>
                    <input type="email" value="{{ old('email') }}" data-email="true" name="email" class="form-control emailbox">
                    <br>

                    <input type="checkbox" class="checkbox2" name="contact" data-checkbox="true" value="1" checked="checked"> 
                    <h4 class="checkbox3">Sunt de acord să primesc informaţii cu privire la promoţiile viitoare de la Canon şi partenerii săi.</h4>
                    
                    <div type="submit" data-buton="true" class="btn-trimite"><span class="btn-inscrie">Înscrie-te</span></div>
                </form>
            </div>

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