<h1>Autóbérlés</h1>
<?php if(isset($_GET['success']) && $_GET['success'] != '') : ?>
	<p>Sikeres bejelentkezés!</p>
<?php endif; ?>
<?php if(isset($_SESSION['permission'])) : ?>
	<p>Jogosultsági szint: <?=$_SESSION['permission']; ?></p>
<?php endif; ?>
<h3>Üdvözöljük Weboldalunkon!</h3>
<hr>
<p>Weboldalunkon böngészhet bérelni kívánt autók között, azokat egyszerűen bérelheti kedvező áron!</p>
<p>Információkhoz látogasson el az Információ menüpontba!</p>
