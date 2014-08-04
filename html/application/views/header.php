<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">

  <title><?php echo $ptitle; ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="/assets/js/bootstrap-sprockets.js"></script>
  
  <script type="text/javascript" src="/assets/js/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="/assets/js/script.js"></script>
  
  <!--[if lt IE 9]>
 	 <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
	<header class="b-header">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                	<div class="b-logo"><a href="<?php echo base_url(); ?>"><img src="/assets/images/logo.png" alt=""></a></div>
                </div>
                <div class="col-md-6 text-right">
                	<div class="b-tel"><small>8 <span>804</span></small> 333-00-82</div>
                    <div class="b-text-tel">Звонок бесплатный по России!</div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="b-menu">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="b-title-menu-xs visible-xs">Меню</div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>"><span>Главная</span></a></li>
                        <li><a href="<?php echo base_url(); ?>faq"><span>Вопросы и ответы</span></a></li>
                        <li><a href="<?php echo base_url(); ?>contacts"><span>Контакты</span></a></li>
                    </ul>
                    <a href="#kadastr-passport" class="b-link-passport popup" data-fancybox-width="564">Нужен кадастровый паспорт?</a>
                    <a href="#big-clients" class="b-link-big-client popup" data-fancybox-width="564">Крупным клиентам</a>
                </div>
            </nav>
        </div>
    </div>
