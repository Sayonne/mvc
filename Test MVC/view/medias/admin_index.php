<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Image</th>
				<th>Titre</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($images as $k=>$v): ?>
			<tr>
				<td>
					<a href="#" onclick="setLink('<?php echo Router::webroot('img/'.$v->file); ?>')">
						<img src="<?php echo Router::webroot('img/'.$v->file); ?>" width="30%" />
					</a>
				</td>
				<td><?php echo $v->name; ?></td>
				<td>
					<a onclick="return confirm('Voulez vous vraiment supprimer cette image ?');" href="<?php echo Router::url('admin/medias/delete/'.$v->id); ?>">Supprimer</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="page-header">
	<h1>Ajouter une image</h1>
</div>

<form action="<?php echo Router::url('admin/medias/index/'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	<?php echo $this->Form->input('file','Image',array('type' => 'file')) ; ?>
	<?php echo $this->Form->input('name','Titre') ; ?>
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-primary">Ajouter</button>
    	</div>
    </div>
</form>

<script type="text/javascript">
	function setLink(url) {

		window.opener.CKEDITOR.tools.callFunction(1, url);
		window.close();

	}
</script>