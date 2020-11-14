<?php
	require_once 'database.php';
	$queryString = "SELECT name, type, danger_level, description, image FROM pest;";
	$records = getList($queryString);
?>
<h1>Kártevők</h1>
<?php foreach ($records as $record) :?>
<div class="info">
	<img class="index" src="<?=PUBLIC_DIR.'Images/'.$record['image']?>" />
	<h2><?=$record['name']?></h2>
	<p>Típusa: <?=$record['type']?></p>
	<p>Veszélyességi szint: 10/<?=$record['danger_level']?></p>
	<p><?=$record['description']?></p>
</div>
<?php endforeach; ?>