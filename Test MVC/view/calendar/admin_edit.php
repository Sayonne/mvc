<div class="page-header">
	<h1>Editer un événement</h1>
</div>

<form method="post" action="<?php echo Router::url('admin/calendar/edit/'.$id); ?>" class="form-horizontal">
	<?php echo $this->Form->input('title', 'Titre'); ?>
	<?php echo $this->Form->input('id', 'hidden'); ?>
	<?php echo $this->Form->input('date', 'Date', array('type'=>'date')); ?>
	<?php echo $this->Form->input('content', 'Contenu', array('type'=>'textarea', 'rows' => 10, 'cols' => 7)); ?>
	<?php echo $this->Form->input('online', 'En ligne', array('type'=>'checkbox')); ?>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-primary">Modifier</button>
    	</div>
  	</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- CKEditor -->
<script src="<?php echo Router::webroot('js/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo Router::webroot('js/ckeditor/adapters/jquery.js'); ?>"></script>
<script type="text/javascript">
	var editor = CKEDITOR.replace( 'content', {
		filebrowserBrowseUrl: '<?php echo Router::url('admin/medias/index/'.$id); ?>',
		filebrowserWindowWidth: '800',
    	filebrowserWindowHeight: '550'
	});
</script>