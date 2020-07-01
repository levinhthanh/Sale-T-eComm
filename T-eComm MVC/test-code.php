<?php
include('Model/GetDatabase.php');
$cus = new CRUD_Database();
$cus->connect();
$row = $cus->executeOne('SELECT customer_fullname FROM customers WHERE customer_phone = "0123456789"');

$cusAll = new CRUD_Database();
$cusAll->connect();
$rowAll = $cusAll->executeAll('SELECT customer_fullname FROM customers');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T - eComm by MVC</title>
</head>

<body>
    <label for=""><?= $row['customer_fullname'] ?></label>
    <br>
    <label for="">
        <?php
        foreach ($rowAll as $key => $value) {
            echo $value['customer_fullname'].'<br>';
        }
        ?>
    </label>
</body>

</html>