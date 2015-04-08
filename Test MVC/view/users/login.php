<div class="page-header">
	<h1>Zone réservée</h1>
</div>

<form method="post" action="<?php echo Router::url('users/login'); ?>" class="form-horizontal">
	<?php echo $this->Form->input('login', 'Identifiant'); ?>
	<?php echo $this->Form->input('password', 'Mot de passe', array('type'=>'password')); ?>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-primary">Connexion</button>
    	</div>
  	</div>
</form>