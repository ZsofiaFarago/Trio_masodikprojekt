<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addItem'])) {
		$p_data = [
			'category' => $_GET['addcar'],
			'name' => $_POST['name'],	
			'price' => $_POST['price'],
			'available' => $_POST['available']
		];

			$query = "INSERT INTO cars (category, name, price, available, img) VALUES (:category, :name, :price, :available, :img)";
			$params = [
				':category' => $p_data['category'],
				':name' => $p_data['name'],
				':price' => $p_data['price'],
				':available' => $p_data['available'],
				':img' => 'car'
			];

			require_once DATABASE_CONTROLLER;

			if(!executeDML($query, $params)){
				echo "Cant insert.";
			}
			header('Location: index.php?S=car_rent&A=categories');
	 }
	 ?>


<?php if(!array_key_exists('addcar', $_GET)) : ?>
	<center><h2>Válaszd ki melyik kategóriához szeretnél hozzáadni!</h2></center>
	<div>
			<center>
				<a href="index.php?S=car_rent&A=seller&addcar=personal"><button style="font-size: 20px; padding: 6px; margin-bottom: 6px">Személygépjármű</button></a>
				<a href="index.php?S=car_rent&A=seller&addcar=bike"><button style="font-size: 20px; padding: 6px; margin-bottom: 6px">Motorkerékpár</button></a>
				<a href="index.php?S=car_rent&A=seller&addcar=commercial"><button style="font-size: 20px; padding: 6px; margin-bottom: 6px">Haszongépjármű</button></a>
			</center>
		</div>
<?php else: ?>
	<center><h2>
		<?php if($_GET['addcar'] == 'personal') : ?>
		Személyautó
		<?php elseif($_GET['addcar'] == 'bike') : ?>
		Motorkerékpár
		<?php elseif($_GET['addcar'] == 'commercial') : ?>
		Haszongépjármű
		<?php endif; ?>
		hozzáadása
	</h2></center>
	<form method="POST">
		<div class="form-row">
			<div class="form-group col-md-12">
				<input type="text" class="form-control" id="name" name="name" placeholder="Jármű neve">
			</div>
			<div class="form-group col-md-12">
				<input type="text" class="form-control" id="price" name="price" placeholder="Jármű bérleti díja/hét">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<input type="text" class="form-control" id="available" name="available" placeholder="Elérhetőség (0/1)">
			</div>
		</div>

		<div class="btncenter">
			<button type="submit" class="btn btn-primary btncenter" name="addItem">Add Item</button>
		</div>

	</form>
<?php endif; ?>
