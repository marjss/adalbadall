<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="canonical" href="#">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="#">
    <link rel="icon" href="#">
    <?php Yii::app()->bootstrap->register(); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style.css'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/imports.min.css'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/font-awesome.css'); ?>
    
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" cz-shortcut-listen="true">

<!--		<nav class="navbar navbar-inverse navbar-fixed-top first-navbar navbar-scrolling">
  <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li>
        <a href="#">Home</a>
      </li>
      <li class="divider-vertical"></li>
            <li class="active">
        <a href="#">Research</a>
      </li>
      <li class="divider-vertical"></li>
    </ul>
  </div>
</nav>-->

<nav class="navbar navbar-custom navbar-static-top second-navbar navbar-scrolling affix-top" role="navigation">

    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            
          <span class="name">
              <!--<img src ="images/logo/logo-white.png">-->
              <span></span>
                  
          </span>
        </a>
      </div>


    <div class="collapse navbar-collapse navbar-main-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Profile <span class="fa fa-caret-down"></span>
          </a>
          <ul class="dropdown-menu right" role="menu">
            <li><a href="#">Whois</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Connect <span class="fa fa-caret-down"></span>
          </a>
          <ul class="dropdown-menu right" role="menu">
            <li><a href="#">Iris</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Monitor <span class="fa fa-caret-down"></span>
          </a>
          <ul class="dropdown-menu right" role="menu">
            <li><a href="#">PhishEye</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Acquire <span class="fa fa-caret-down"></span>
          </a>
          <ul class="dropdown-menu right" role="menu">
            <li><a href="#">Domain Marketplace</a></li>
           
          </ul>
        </li>
        <li>
          <a href="#">Support</a>
        </li>
        <form class="navbar-form navbar-left visible-lg nav-whois" role="form" method="GET" action="#">
          <div class="form-group has-feedback has-feedback">
            <label class="control-label sr-only">Whois Lookup</label>
            <input type="text" class="form-control" placeholder="Whois Lookup" name="q" autofocus="" required="">
            <i id="searchGlass" class="form-control-feedback fa fa-search"></i>
            <input type="hidden" value="whois" name="service">
          </div>
        </form>

        <li id="nav-whois-dropdown" class="dropdown hidden-lg">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Whois <span class="fa fa-caret-down"></span>
          </a>
          <ul class="dropdown-menu whois" style="padding:12px;">
            <form class="form-inline" role="form" method="GET" action="#">
              <div class="input-group">
                <input type="text" id="dropdown-input" class="form-control" placeholder="Enter a query" name="q" autofocus="" required="">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
                <input type="hidden" value="whois" name="service">
              </div>
            </form>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
                <li>
                    <a href="#">Login</a>
                </li>
<li id="wStatusBar-cart" style="display:none">
    <a href="#">
        <i class="fa fa-shopping-cart fa-lg"></i> 0    </a>
</li>


            <li class="free">
                <form action="#">
                    <button class="btn btn-green navbar-btn" type="submit">Sign Up</button>
                </form>
            </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
	
    <div class="container page">
        <div class="row">
            
        </div>
        
    </div>

<!-- Intro Header -->
<header class="intro">
    <canvas id="spiders" class="hidden-xs" width="1366" height="589" style="z-index: -1;"></canvas>
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Am looking for</h1>
                    <form role="form" method="GET" action="#">
                        <div class="form-group">
                            <div class="input-group">
                                <input id="landing-whois" class="form-control" type="text" placeholder="Enter a query" name="q" autofocus="" required="">
                                <span class="input-group-btn">
                                    <button id="search" class="btn btn-success" type="submit">Search</button>
                                </span>
                            </div> <!-- /input-group -->
                            <input type="hidden" value="whois" name="service">
                        </div>
                    </form>
                    <a href="#jump" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Marketing Section -->
<section class="jumbotron marketing" id="jump">
    <div class="container ">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0">
          <img class="img-circle" src="./images/icon-whois.png">
          <p>Go beyond ordinary Whois to discover the people or organizations behind a domain name or IP address.</p>
          <p><a class="btn btn-success" role="button" href="#">Learn More</a></p>
        </div><!-- /.col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 -->
        <div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0">
          <img class="img-circle" src="./images/icon-ip.png">
          <p>"Connect the dots", discovering connections between domains, persons, organizations, IP addresses, etc.</p>
          <p><a class="btn btn-success" role="button" href="#">Learn More</a></p>
        </div><!-- /.col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 -->
        <div class="col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0">
          <img class="img-circle" src="./images/icon-domain.png">
          <p>Protect tangible and digital assets and intellectual property against cybercrime, brand fraud, and theft.</p>
          <p><a class="btn btn-success" role="button" href="#">Learn More</a></p>
        </div><!-- /.col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 -->
      </div><!-- /.row -->
  </div>
</section>
<section class="directory">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline"><li><a href="#">a</a></li>
                    <li><a href="#">b</a></li>
                    <li><a href="#">c</a></li>
                    <li><a href="#">d</a></li>
                    <li><a href="#">e</a></li>
                    <li><a href="#">f</a></li>
                    <li><a href="#">g</a></li>
                    <li><a href="#">h</a></li>
                    <li><a href="#">i</a></li>
                    <li><a href="#">j</a></li>
                    <li><a href="#">k</a></li>
                    <li><a href="#">l</a></li>
                    <li><a href="#">m</a></li>
                    <li><a href="#">n</a></li>
                    <li><a href="#">o</a></li>
                    <li><a href="#">p</a></li>
                    <li><a href="#">q</a></li>
                    <li><a href="#">r</a></li>
                    <li><a href="#">s</a></li>
                    <li><a href="#">t</a></li>
                    <li><a href="#">u</a></li>
                    <li><a href="#">v</a></li>
                    <li><a href="#">w</a></li>
                    <li><a href="#">x</a></li>
                    <li><a href="#">y</a></li>
                    <li><a href="#">z</a></li>
                    <li><a href="#">0</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                </ul>            
            </div>
        </div> <!-- /row -->
    </div>
</section>

	<div class="footer">
    <div class="container">
                <hr class="footer-divider">
        <footer>
            <ul class="list-inline left">
                <li><a href="#"><i class="fa fa-fw fa-lg fa-rss-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-fw fa-lg fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-fw fa-lg fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fa fa-fw fa-lg fa-google-plus-square"></i></a></li>
                            </ul>
            <ul class="list-inline right">
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li></li>
                <li><p> Copyright &copy; <?php echo date('Y'); ?> AdalBadall</p></li>
            </ul>
        </footer>
    </div>
</div>
	<script>
$( document ).ajaxSend( function( event, xhr, settings ) {
    

    
} );
</script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-1.12.4.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/code.js"></script>
</body>
</html>