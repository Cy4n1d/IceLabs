<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">

	<? foreach($cssFiles as $file): ?>
    	<link rel="stylesheet" href="<?= $file;?>">
	<? endforeach;?>

	<? foreach($css as $style): ?>
    	<style type="text/css"><?= $style;?></style>
	<? endforeach;?>

	<link rel="stylesheet" href="<?= css_url() ?>style.css">

	

</head>

<body>
	<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">IceLabs</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Raids <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Upcoming</a></li>
	            <li><a href="#">Past</a></li>
	          </ul>
	        </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">View</a></li>
	            <li><a href="#">Edit</a></li>
	            <li><a href="#">Charachters</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	<section class="container">
		
		<? $this->load->view($view, $data); ?>

	</section>

	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <? foreach($scriptFiles as $file): ?>
    	<script src="<?= $file;?>"></script>
	<? endforeach;?>

	<? foreach($scripts as $script): ?>
    	<script type="text/javascript"><?= $script;?></script>
	<? endforeach;?>
</body>

</html>