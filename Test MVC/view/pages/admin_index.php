<div class="page-header">
	<h1><?php echo $total; ?> Pages</h1>
</div>

<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>En ligne ?</th>
				<th>Titre</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pages as $k=>$v): ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				<td>
					<span class="label <?php echo ($v->online==1)?'label-success':'label-danger'; ?>"><?php echo ($v->online==1)?'En ligne':'Hors ligne' ?></span>
				</td>
				<td><?php echo $v->name; ?></td>
				<td>
					<a href="<?php echo Router::url('admin/pages/edit/'.$v->id); ?>">Editer</a>
					<a onclick="return confirm('Voulez vous vraiment supprimer ce contenu');" href="<?php echo Router::url('admin/pages/delete/'.$v->id); ?>">Supprimer</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<a href="<?php echo Router::url('admin/pages/edit'); ?>" class="btn btn-primary" role="button">Ajouter une page</a>