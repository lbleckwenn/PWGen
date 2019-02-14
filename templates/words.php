<div class="container mt-3">
	<h3>Wortliste</h3>
	<hr>
	<div class="row">
<?php
foreach ( $this->_ ['words'] as $word ) {
	?>
		<div class="col-6 col-sm-3 col-lg-2"><?php echo $word; ?></div>
<?php
}
?>
	</div>
</div>