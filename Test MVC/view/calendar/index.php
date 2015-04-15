<div class="page-header">
	<h1>Liste des évènements</h1>
</div>
<div class="container-fluid">
	<div class="row">
		<?php foreach($calendar as $k => $v): ?>

			<div class=".col-xs-6 .col-md-4"><h3><?php echo $v->date ?></h3></div>
			<div class=".col-xs-12 .col-md-8"><h2><?php echo $v->title; ?></h2>

			<p><?php echo $v->content; ?></p></div>

		<?php endforeach; ?>
	</div>
</div>


<nav>
  <ul class="pagination">
    <?php for($i=1; $i <= $page; $i++): ?>
    <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
   	 <?php endfor; ?>
  </ul>
</nav>