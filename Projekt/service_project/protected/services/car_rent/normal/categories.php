<?php 
	$query = "SELECT id, category, name, price, available, img FROM cars";
	require_once DATABASE_CONTROLLER;
	$items = getList($query);

 ?>

<?php if(!array_key_exists('c', $_GET)) : ?>
	<div>
		<center>
			<a href="index.php?S=car_rent&A=categories&c=personal"><button style="font-size: 20px; padding: 6px; margin-bottom: 6px">Személygépjármű</button></a>
			<a href="index.php?S=car_rent&A=categories&c=bike"><button style="font-size: 20px; padding: 6px; margin-bottom: 6px">Motorkerékpár</button></a>
			<a href="index.php?S=car_rent&A=categories&c=commercial"><button style="font-size: 20px; padding: 6px; margin-bottom: 6px">Haszongépjármű</button></a>
		</center>
	</div>
<?php else: ?>
		<?php if($_GET['c'] == 'personal') : ?>
				<h1 style="margin-bottom: 9px"><center>Személygépjárművek:</center></h1>
			<?php elseif($_GET['c'] == 'bike') : ?>
				<h1 style="margin-bottom: 9px"><center>Motorkerékpárok:</center></h1>
			<?php else: ?>
				<h1 style="margin-bottom: 9px"><center>Haszongépjárművek:</center></h1>
		<?php endif; ?>
		<?php 
			$n = 0;
			foreach ($items as $i) {
				if($i['category'] == $_GET['c']){
					$n++;
				}
			}
		 ?>
		<?php if($n <= 0) : ?>
		<h2>Nincs jármű ebben a kategóriában.</h2>
	<?php else : ?>	
		<?php foreach ($items as $i) : ?>
			<?php if($i['category'] == $_GET['c']) : ?>
				<div class="item">
						<table style="table-layout: fixed; width: 60%; border: 3px solid gray; margin-left: auto; margin-right: auto;   background-color: #bababa;">
						<tr>
							<td colspan="2"><center><img src="./public/Images/car_rent/<?=$i['img']?>.jpg" width="250" style="border: 2px solid gray"></center></td>			
						</tr>
						<tr>
							<td><b>Név:</b> <?=$i['name'] ?></td>
							<td style="text-align: center">
								<?=$i['price'] ?><p>Ft/hét.</p>
							</td>	
						</tr>
						<tr>
							<td><b>Elérhetőség:</b> <?php if($i['available'] == 1) : ?> <p style="color: green">Elérhető!</p>
													<?php else: ?><p style="color: red">Nem elérhető!</p></td>	
													<?php endif; ?>		
						</tr>
						<hr>
						<tr>
							<td colspan="2"><center><button <?php 
																if($i['available'] == 0) :
 															?>
 															disabled
 															<?php endif; ?>
 													style="font-size: 20px; padding: 6px; margin-bottom: 6px">Foglalás</button></center></td>
						</tr>
					</table>
				</div>
				<hr style="margin-bottom: 12px; margin-top: 12px;">
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
	<a href="index.php?S=car_rent&A=categories"><button style="font-size: 20px; padding: 6px; margin-bottom: 6px">Vissza</button></a>
<?php endif; ?>