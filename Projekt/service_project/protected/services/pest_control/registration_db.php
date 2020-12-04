<?php
    require_once 'database.php';

    if(array_key_exists('registration', $_POST)){
        registration();
    }

    function registration() {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $street = $_POST['street'];
        $streetNumber = $_POST['streetNumber'];
        $floor = $_POST['floor'];
        $door = $_POST['door'];

        if ($city == null || $city == "" || $postcode == null || $postcode == "" || $street == null || $street == "" || $streetNumber == null || $streetNumber == "" || $firstName == null || $firstName == "" || $lastName == null || $lastName == "" || $email == null || $email == "" || $password == null || $password == "" || $phone == null || $phone == "") {
            echo "<p>Ellenőrizze, hogy minden szükséges adatott megadott-e!</p>";
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


        $addressId = getField("SELECT id FROM address WHERE street_name = :street_name AND street_number = :street_number AND floor = :floor AND door = :door", [':street_name'  =>  $street, ':street_number' =>  $streetNumber, ':floor'    =>  $floor, ':door' =>  $door]);
        if($addressId == null) {
            executeDML($addressInsert, $addressParams);
            $addressId = getField("SELECT id FROM address WHERE street_name = :street_name AND street_number = :street_number AND floor = :floor AND door = :door", $addressParams);
        }

        $customerInsert = "INSERT INTO customer(first_name, last_name, email, phone, password, address_id) VALUES(:first_name, :last_name, :email, :phone, :password, :address_id)";
        $customerParams = [
            ':first_name'    =>  $firstName,
            ':last_name'  =>  $lastName,
            ':email'    =>  $email,
            ':phone' =>  $phone,
            ':password' =>  $password,
            ':address_id'   =>  $addressId
        ];

        $customerId = getField("SELECT id FROM customer WHERE email = :email", [':email' => $email]);
        if($customerId == null && executeDML($customerInsert, $customerParams)) {
            echo "<p>Sikeres regisztráció.</p>";
        }
        else {
            echo "<p>Ön már valószínűleg regisztrált.</p>";
        }
    }
?>