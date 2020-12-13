<h1>Megrendelés</h1>

<p>Csak regisztrált felhasználóknak!</p>
<p>Adja meg regisztrációkor megadott email címét, jelszavát, mielőtt megrendeli a szolgáltatlást, ez alapján tudjuk Önt azonosítani.</p>
<p>Adja meg, melyik címre kéri a kártevőirtást! Ha ez megegyezik a regisztrációkor megadott címével, hagyja üresen!</p>
<p>Végül válassza ki, milyen kártevő okozza a problémát!</p>

<?php require_once 'order_db.php' ?>

<div  class="form">
    <form id="contactform" method="POST">
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

    	<p class="contact"><label for="floor">Emelet (nem kötelező)</label></p>
    	<input id="floor" name="floor" placeholder="2" type="text">

    	<p class="contact"><label for="door">Ajtó (nem kötelező)</label></p>
    	<input id="door" name="door" placeholder="3" type="text">

        <p class="contact"><label for="pest">Kártevő típusa:</label></p>
        <select name="pest" id="pest">
            <option value="csótány">Csótány</option>
            <option value="hangya">Hangya</option>
            <option value="egér">Egér</option>
            <option value="patkány">Patkány</option>
        </select> <br/>
        <p class="contact"><label for="date">Válasszon egy napot egy hónapos időintervallumon belül, és hamarosan felvesszük Önnel a kapcsolatot telefonon időpontegyeztetéssel kapcsolatban!<br/>Aktuális időszak: <?= date("Y.m.d").' - '.date("Y.m.d", strtotime("+1 Months")).'.'?></label></p>
        <select name="day" id="day">
            <?php
                $numberOfDays = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
                for ($i = date("d"); $i <= $numberOfDays; $i++) {
                    $day = $i;
                    if ($i < 10) {
                        $day = "0".$i;
                    }
                    echo '<option value="', date('Y'), '-', date('m'), '-', $day, '">', date('Y'), '-', date('m'), '-', $day, '</option>';
                }
                $numberOfDays = cal_days_in_month(CAL_GREGORIAN, date("m", strtotime("+1 Months")), date("Y"));
                for ($i = 1; $i <= date("d"); $i++) {
                    $day = $i;
                    if ($i < 10) {
                        $day = "0".$i;
                    }
                    echo '<option value="', date('Y'), '-', date('m', strtotime("+1 Months")), '-', $day, '">', date('Y'), '-', date('m', strtotime("+1 Months")), '-', $day, '</option>';
                }
            ?>
        </select><br/>
        <p class="contact"><label for="time">Válasszon egy kívánt kezdési időt: </label></p>
        <select name="time" id="time">
            <option value="08:00:00">08:00</option>
            <option value="10:00:00">10:00</option>
            <option value="14:00:00">14:00</option>
            <option value="16:00:00">16:00</option>
        </select><br/>
        <input class="buttom" name="order" id="submit" value="Megrendelés" type="submit">
   </form> 
</div>