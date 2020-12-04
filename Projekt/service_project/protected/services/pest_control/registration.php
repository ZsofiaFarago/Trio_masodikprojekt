<h1>Regisztráció</h1>
<?php require_once 'registration_db.php' ?>
<div  class="form">
    <form id="contactform" method="POST">
    	<p class="contact"><label for="lastName">Vezetéknév</label></p>
    	<input id="name" name="lastName" placeholder="Kovács" type="text">
    			
    	<p class="contact"><label for="firstName">Keresztnév</label></p>
    	<input id="name" name="firstName" placeholder="János" type="text">
    			
    	<p class="contact"><label for="email">Email</label></p>
    	<input id="email" name="email" placeholder="example@email.com" type="email">
    		
    	<p class="contact"><label for="phone">Telefonszám</label></p>
       	<input id="phone" name="phone" placeholder="06 90 999 9999" type="text">

        <p class="contact"><label for="password">Adja meg a jelszavát</label></p>
    	<input type="password" class="password" name="password">

    	<p class="contact"><label for="city">Város</label></p>
    	<input id="city" name="city" placeholder="Eger" type="text">

    	<p class="contact"><label for="postcode">Irányítószám</label></p>
    	<input id="postcode" name="postcode" placeholder="3300" type="text">

    	<p class="contact"><label for="street">Közterület neve</label></p>
    	<input id="street" name="street" placeholder="Dobó István utca" type="text">

    	<p class="contact"><label for="streetNumber">Házszám</label></p>
    	<input id="streetNumber" name="streetNumber" placeholder="13" type="text">

    	<p class="contact"><label for="floor">Emelet</label></p>
    	<input id="floor" name="floor" placeholder="2" type="text">

    	<p class="contact"><label for="door">Ajtó</label></p>
    	<input id="door" name="door" placeholder="3" type="text"><br />

        <input class="buttom" name="registration" id="submit" value="Regisztráció" type="submit">	 
   </form> 
</div>