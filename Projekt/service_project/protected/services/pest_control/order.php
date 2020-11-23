<h1>Megrendelés</h1>

<p>Csak regisztrált felhasználóknak!</p>
<p>Adja meg regisztrációkor megadott email címét, jelszavát, mielőtt megrendeli a szolgáltatlást, ez alapján tudjuk Önt azonosítani.</p>
<p>Adja meg, melyik címre kéri a kártevőirtást! Ha ez megegyezik a regisztrációkor megadott címével, hagyja üresen!</p>
<p>Végül válassza ki, milyen kártevő okozza a problémát!</p>

<div  class="form">
    <form id="contactform">
    	<p class="contact"><label for="email">Email</label></p>
    	<input id="email" name="email" placeholder="example@email.com" type="email">

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
    	<input id="door" name="door" placeholder="3" type="text">

        <p class="contact"><label for="pest">Kártevő típusa:</label></p>
        <select name="pest" id="cars">
            <option value="csotany">Csótány</option>
            <option value="hangya">Hangya</option>
            <option value="eger">Egér</option>
            <option value="patkany">Patkány</option>
        </select> <br/>
        <input class="buttom" name="order" id="submit" value="Megrendelés" type="submit">	 
   </form> 
</div>