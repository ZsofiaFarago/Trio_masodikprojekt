<?php
	require_once 'database.php';
	$queryString = "SELECT name, base_price FROM pest;";
	$records = getList($queryString);
?>
<h1>Árajánlat</h1>
<p>Üdvözöljük az oldalunkon. Itt találják azokat a kártevőket, melyeknek irtását vállaljuk, és itt láthatóak azok az eszközök is, melyeket munkánk során használunk. Amikor áraink felől szeretnének érdeklődni, előbb tanulmányozzák ezt a táblázatot, és mérjék fel lakásuk, házuk, nyaralójuk, irodájuk és egyéb ingatlanaik kártevőmentesítésének költségeit! A táblázat alapján nyilvánvaló, hogy különböző típusú kártevőket eltérő alapdíjjal vállalunk. Ez nyilvánvaló, hiszen ezeknek az irtása eltérő nehézségű, veszélyességük és méretük is különböző. De bármi is okozza a problémát, a kiszállási költség mindenképpen hozzáadódik az alapköltséghez. Munkánk során számos eszközzel dolgozunk, ezeket a kártevő típusa és a helyzet súlyossága szerint választjuk meg. Ezek használata eszközönként eltérő költséggel jár, az alapdíjhoz ez is hozzáadódik. A végső árat azonban csak állapotfelmérés után tudjuk megmondani, miután láttuk a kártevők számát és a fertőzés súlyosságát.</p>
<table class="container">
	<thead>
		<tr>
			<th>Kártevő</th>
			<th>Alapdíj</th>
		</tr>
	</thead>
	<tbody>
        <?php foreach ($records as $record) :?>
        <tr>
            <td><?=$record['name'] ?></td>
            <td><?=$record['base_price'] ?> Ft</td>
        </tr>
        <?php endforeach; ?>
	</tbody>
	<tfoot>
		<td colspan="2">Kiszállási díj: 5000 Ft</td>
	</tfoot>
</table>

<?php
	require_once 'database.php';
	$queryString = "SELECT name, cost FROM gear;";
	$records = getList($queryString);
?>
<table class="prices">
	<thead>
		<tr>
			<th colspan="2">Eszközhasználati díj</th>
		</tr>
	</thead>
	<tbody>
        <?php foreach ($records as $record) :?>
        <tr>
            <td><?=$record['name'] ?></td>
            <td><?=$record['cost'] ?> Ft</td>
        </tr>
        <?php endforeach; ?>
	</tbody>
</table>