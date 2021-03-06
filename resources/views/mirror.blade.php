<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mirror Mirror</title>
        <meta name="description" content="Mirror mirror on the wall...">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/weather.css">
        <link rel="stylesheet" href="css/endlessRiver.css">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.0.2/jquery.simpleWeather.min.js"></script>
        <script src="/js/skycons.js"></script>
        <script src="/js/vendor/moment.js"></script>
        <script src="/js/lib/jquery.bingsearch/jquery.bingsearch.js"></script>
        <script src="/js/lib/jquery-base64/jquery.base64.min.js"></script>
        <script src="/js/lib/endlessRiver.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <section>
            <div id="date">

            </div>
            <div id="weather">

            </div>
        </section>
        <p id="greeting">
            {{ $greeting }}
        </p>
        <ul id="newsTicker"></ul>
        <script type="text/javascript" src="/js/clock.js"></script>
        <script type="text/javascript" src="/js/weather.js"></script>
        <script type="text/javascript" src="/js/news.js"></script>
        <script type="text/javascript">
            var gitHash = {{ trim(`git rev-parse HEAD`) }};
               (function checkVersion()
                {
                    $.getJSON('/version', {}, function(json, textStatus) {
                        if (json) {
                            if (json.gitHash != gitHash) {
                                window.location.reload();
                                window.location.href=window.location.href;
                            }
                        }
                    });
                    setTimeout(function() {
                        checkVersion();
                    }, 3000);
                })(); 
        </script>
    </body>
</html>
