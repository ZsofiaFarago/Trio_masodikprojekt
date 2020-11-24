<h1>Autóbérlés</h1>
<?php if(isset($_GET['success']) && $_GET['success'] != '') : ?>
	<p>Sikeres bejelentkezés!</p>
	<p>Jogosultsági szint: <?=$_SESSION['permission']; ?></p>
<?php endif; ?>
<p>Fejlesztés alatt...</p>
