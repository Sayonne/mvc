<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo isset($title_for_layout)?$title_for_layout:'Mon site'; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
		      <a class="navbar-brand" href="#">Site Perso</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			    	<li><a href="<?php echo Router::url('posts/index'); ?>">Home</a></li>
			    	<li><a href="<?php echo Router::url('calendar/index'); ?>">Calendar</a></li>
			    	<li><a href="<?php echo Router::url('subcriptions/index'); ?>">Inscription</a></li>
			    	<li><a href="<?php echo Router::url('contacts/index'); ?>">Contact</a></li>
		      	</ul>
		      	<ul class="nav navbar-nav navbar-right">
		      	<?php if(!$this->Session->isLogged()){ ?>
			        <li><a href="<?php echo Router::url('/users/login'); ?>">Connection</a></li>
		      	<?php } else { ?>
		      		<li><a href="<?php echo Router::url('admin/posts/index'); ?>">Administration</a></li>
		      		<li><a href="<?php echo Router::url('users/logout'); ?>">Déconnexion</a></li>
		      	<?php } ?>
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