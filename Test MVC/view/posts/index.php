<div class="page-header">
	<h1>Le Blog</h1>
</div>
<?php foreach($posts as $k => $v): ?>

	<h2><?php echo $v->name; ?></h2>

	<?php echo $v->content; ?>
	<p><a href="<?php echo Router::url("posts/view/id:{$v->id}/slug:$v->slug"); ?>" title="<?php echo $v->name; ?>">Lire la suite &rarr;</a></p>

<?php endforeach; ?>


<nav>
  <ul class="pagination">
    <?php for($i=1; $i <= $page; $i++): ?>
    <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
   	 <?php endfor; ?>
  </ul>
</nav>