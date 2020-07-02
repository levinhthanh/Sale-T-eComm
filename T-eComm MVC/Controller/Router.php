<?php
if (isset($_GET['router'])) {
    $router = $_GET['router'];
    switch ($router) {
        case 'admin': {
                include('Controller/Controller_admin.php');
                break;
            }
        case 'account': {
                include('Controller/Controller_account.php');
                break;
            }
    }
}
else{
    include('Controller/Controller_account.php');
}
