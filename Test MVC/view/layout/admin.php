<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo isset($title_for_layout)?$title_for_layout:'Administration'; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" media="screen" />
</head>
<body>
	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo Router::url('admin/posts/index'); ?>">Administration</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			   	 	<li><a href="<?php echo Router::url('admin/posts/index'); ?>">Articles</a></li>
			   	 	<li><a href="<?php echo Router::url('admin/pages/index'); ?>">Pages</a></li>
			   	 	<li><a href="<?php echo Router::url('admin/calendar/index'); ?>">Calendrier</a></li>
			   	 	<li><a href="<?php echo Router::url(); ?>">Retour au site</a></li>
		      	</ul>
		      	<ul class="nav navbar-nav navbar-right">
			        <li><a href="<?php echo Router::url('users/logout'); ?>">Déconnexion</a></li>
			    </ul>
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<?php echo $this->Session->flash(); ?> 
		<?php echo $content_for_layout; ?>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>