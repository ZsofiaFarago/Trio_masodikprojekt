<?php if(!array_key_exists('c', $_GET)) : ?>
	<div>
		<center>
			<a href="index.php?S=car_rent&A=categories&c=personal"><button>Személygépjármű</button></a>
			<a href="index.php?S=car_rent&A=categories&c=bike"><button>Motorkerékpár</button></a>
			<a href="index.php?S=car_rent&A=categories&c=commercial"><button>Haszongépjármű</button></a>
		</center>
	</div>
<?php else: ?>
	<?php if($_GET['c'] == 'personal') : ?>
		<p>Személygépjárművek..</p>
	<?php elseif($_GET['c'] == 'bike') : ?>
		<p>Motorok..</p>
	<?php elseif($_GET['c'] == 'commercial') : ?>
		<p>Haszonjárművek..</p>
	<?php endif; ?>
	<a href="index.php?S=car_rent&A=categories"><button>Vissza</button></a>
<?php endif; ?>