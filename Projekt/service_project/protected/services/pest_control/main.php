<?php
	require_once 'database.php';
	$queryString = "SELECT name, base_price FROM pest;";
	$records = getList($queryString);
?>
<h1>Árajánlat</h1>
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
		<td>Kiszállási díj</td>
		<td>5000 Ft</td>
	</tfoot>
</table>