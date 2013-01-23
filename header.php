<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      HeatSync Labs
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/new-hsl/css/hsl.css" rel="stylesheet" type="text/css">
    <!-- For Development, use line below and comment out line above -->
    <!-- <link href="/new-hsl/deps/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/new-hsl/deps/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/new-hsl/deps/Font-Awesome/css/font-awesome.min.css">
    <link href="/new-hsl/css/app.css" rel="stylesheet" type="text/css">
    <link href="/new-hsl/css/app-responsive.css" rel="stylesheet" type="text/css"> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-12598372-1']);
      _gaq.push(['_setDomainName', 'heatsynclabs.org']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    <script type="text/javascript">
      var dojoConfig = {
        baseUrl: '/new-hsl/',
        packages: [
          { name: 'dojo', location: 'deps/dojo' },
          { name: 'lodash', location: 'deps/lodash', main: 'lodash'},
          { name: 'goog', location: 'deps/requirejs-plugins/src', main: 'goog' },
          { name: 'hsl', location: 'js' }
        ],
        deps: ['hsl/main'],
        async: true
      };
    </script>
    <script src="/new-hsl/dist/hsl.js" type="text/javascript"></script>
    <!-- For Development, use line below and comment out line above -->
    <!-- <script src="/new-hsl/deps/dojo/dojo.js" type="text/javascript"></script> -->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="span8 logo">
          <a href="/"><img src="/new-hsl/img/logo.png" title="HeatSync Labs" alt="HeatSync Labs"></a>
        </div>
        <div class="social-container span4">
          <a href="http://www.youtube.com/heatsynclabs" title="YouTube Channel" alt="YouTube Channel" class="social-logo youtube"></a>
          <a href="http://www.facebook.com/groups/493579133986393" title="Facebook Group" alt="Facebook Group" class="social-logo facebook"></a>
          <a href="http://www.twitter.com/heatsynclabs" title="Twitter" alt="Twitter" class="social-logo twitter"></a>
          <a href="https://www.flickr.com/photos/hslphotosync/" title="HSL PhotoSync" alt="HSL PhotoSync" class="social-logo flickr"></a>
          <a href="http://www.github.com/heatsynclabs" title="Github" alt="Github" class="social-logo github"></a>
        </div>
      </div>
      <div class="row">
        <div class="span3 sidebar-nav">
          <div class="left-info">
            <h3>
              We are..
            </h3>
            <ul>
              <li>a place to make things--We call it a hackerspace.</li>
              <li>made up entirely of volunteers--no staff!</li>
	    	      <li>located at:<br><a href='http://goo.gl/maps/5oo83'>140 West Main St.<br>Downtown Mesa</a></li>
              <li>open <strong>FREE</strong><br><strong>Mon-Fri 7p-10p</strong><br>
                <div class="italics">
                  (and whenever a member unlocks the doors)
                </div></li>
              <li>currently:
                <span id="door_status">
                  <i class="icon-spinner icon-spin"></i>
                </span>
              </li>
          </div>
        </div>
        <div class="span7">
