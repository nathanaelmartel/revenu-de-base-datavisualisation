
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <title><?php echo $title?></title>
    
    <meta name="viewport" content="width=650" />
    
    <meta name="application-name" content="<?php echo $title?>"/> 
		<meta name="msapplication-TileColor" content="#FFFFFF"/> 
		<meta name="msapplication-TileImage" content="/pinned-favicon.png"/>
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="author" href="https://plus.google.com/114188409678832581888" />
    <link type="text/plain" rel="author" href="/humans.txt" />
    
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:700,500,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/revenudebase-simplementNat.css" type="text/css" />
    <link rel="stylesheet" href="/css/common-header.css" type="text/css" />
    
	  <meta property="og:title" content="<?php echo $title?>" />
	  <meta property="og:description" content="<?php echo $title?>" />
	  <meta property="og:image" content="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['URI'] ?>/printscreen.png" />
	  <meta property="og:url" content="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['URI'] ?>" />
	  	
    
    <?php include('_piwik.php')?>

  </head>