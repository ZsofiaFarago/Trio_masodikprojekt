<?php
    require_once 'database.php';

    $workDayArray = getList("SELECT work_date FROM cust_order;");
    $workDays = [];
    foreach ($workDayArray as $value) {
        foreach ($value as $result) {
            array_push($workDays, $result);
        }
    }

    if(array_key_exists('order', $_POST)){
        order();
    }

    function order() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $street = $_POST['street'];
        $streetNumber = $_POST['streetNumber'];
        $floor = $_POST['floor'];
        $door = $_POST['door'];
        $pest = $_POST['pest'];
        $day = $_POST['day'];
        $time = $_POST['time'];

        if ($city == null || $city == "" || $postcode == null || $postcode == "" || $street == null || $street == "" || $streetNumber == null || $streetNumber == "" || $email == null || $email == "" || $password == null || $password == "" || $pest == null || $pest == "") {
            echo "<p class=".'"formMessage"'.">Ellenőrizze, hogy minden szükséges adatott megadott-e!</p>";
            return;
        }
        
        $customerId = getField("SELECT cust_code FROM customer WHERE email = :email", [':email' => $email]);
        if ($customerId == null) {
            echo "<p class=".'"formMessage"'.">A megadott email cím még nem szerepel az adatbázisban. Ha már regisztrált, lépjen be azzal az email címével, amelyiket akkor megadott, vagy ha még nem, akkor regoisztráljon!</p>";
            return;
        }

        $customerId = getField("SELECT cust_code FROM customer WHERE email = :email AND password = :password;", [':email' => $email, ':password' => $password]);
        if ($customerId == null) {
            echo "<p class=".'"formMessage"'.">Helytelen jelszót adott meg az email címhez!</p>";
            return;
        }

        $cityInsert = "INSERT INTO city(name, postcode) VALUES(:name, :postcode)";
        $cityParams = [
            ':name' =>  $city,
            ':postcode' =>  $postcode
        ];

        $cityId = getField("SELECT id FROM city WHERE name = :name AND postcode = :postcode", $cityParams);
        if ($cityId == null) {
            executeDML($cityInsert, $cityParams);
            $cityId = getField("SELECT id FROM city WHERE name = :name AND postcode = :postcode", $cityParams);
        }

        $addressInsert = "INSERT INTO address(street_name, street_number, floor, door, city_id) VALUES(:street_name, :street_number, :floor, :door, :city_id)";
        $addressParams = [
            ':street_name'  =>  $street,
            ':street_number' =>  $streetNumber,
            ':floor'    =>  $floor,
            ':door' =>  $door,
            ':city_id'  =>  $cityId
        ];


        $addressId = getField("SELECT id FROM address WHERE street_name = :street_name AND street_number = :street_number AND floor = :floor AND door = :door AND city_id = :city_id", $addressParams);
        if($addressId == null) {
            executeDML($addressInsert, $addressParams);
            $addressId = getField("SELECT id FROM address WHERE street_name = :street_name AND street_number = :street_number AND floor = :floor AND door = :door AND city_id = :city_id", $addressParams);
        }

        $workDate = $day.' '.$time;

        var_dump($workDate);
        $pestId = getField("SELECT id FROM pest WHERE name = :name", [':name' => $pest]);
        var_dump($pestId);
        var_dump($addressId);
        var_dump($customerId);
        $orderParams = [
            ':cust_id' => $customerId,
            ':pest_id' => $pestId,
            ':address_id' => $addressId,
            ':work_date' => $workDate
        ];
        $insertQuery = "INSERT INTO cust_order(cust_id, pest_id, address_id, work_date) VALUES(:cust_id, :pest_id, :address_id, :work_date)";
        executeDML($insertQuery, $orderParams);
    }
?>