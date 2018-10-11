<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if (isset($pageTitle)): echo $pageTitle . ' | '; endif; if ($bodyClass == 'home'): echo 'Website design and development by '; endif;?>amillionmonkeys</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="/assets/svg/output/png/logo.png" />
    <meta property="og:title" content="<?php if (isset($pageTitle)): echo $pageTitle . ' | '; endif; if ($bodyClass == 'home'): echo 'Website design and development by '; endif;?>amillionmonkeys" />
    <?php if ($bodyClass == 'home') { ?>
    <meta property="og:description" content="amillionmonkeys is a Brighton-based web design and development studio. We work with agencies, businesses and not-for-profits to build digital products that make an impact. Our websites are fast, reliable, user-friendly and load super-quick on a range of devices." />
    <?php } ?>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href='//fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//<?php echo($_SERVER['HTTP_HOST']);?>/assets/css/style.css">
    <link rel="shortcut icon" href="//<?php echo($_SERVER['HTTP_HOST']);?>/assets/favicon.ico">
    <script src="//<?php echo($_SERVER['HTTP_HOST']);?>/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script>
          /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
    window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!(!t.document.createElementNS||!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),o=function(o){var a=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];a.rel="stylesheet",a.href=e[o&&n?0:o?1:2],a.media="only x",r.parentNode.insertBefore(a,r),setTimeout(function(){a.media="all"})},a=new t.Image;a.onerror=function(){o(!1)},a.onload=function(){o(1===a.width&&1===a.height)},a.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};

          grunticon(["/assets/svg/output/icons.data.svg.css", "/assets/svg/output/icons.data.png.css", "/assets/svg/output/icons.fallback.css"]);
        </script>
        <noscript><link href="/assets/svg/output/icons.fallback.css" rel="stylesheet"></noscript>

</head>
<body class="<?php echo $bodyClass; ?>">
  <div id="main" class="m-scene">
    <header class="main-header">

      <div class="logo">
        <img src="/assets/svg/logo.svg" alt="amillionmonkeys">
      </div>
      <nav class="main-nav beta">
        <ul>
          <li><a class="<?php if ($navClass == 'home'): echo 'active'; endif;?>" href="/">Home</a></li>
          <li><a class="<?php if ($navClass == 'about'): echo 'active'; endif;?>" href="/about/">About</a></li>
          <li><a class="<?php if ($navClass == 'work'): echo 'active'; endif;?>" href="/work/">Work</a></li>
          <li><a class="<?php if ($navClass == 'contact'): echo 'active'; endif;?>" href="/contact/">Contact</a></li>
        </ul>
      </nav><!--/.main-nav-->
    </header><!--/.main-header-->
