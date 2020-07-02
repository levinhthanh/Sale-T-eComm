<?php
// Khởi tạo ban đầu:
$display = 'none';
$table = '';
if (isset($_GET['control'])) {
    switch ($_GET['control']) {
        case 'add_employee': {
                $display = 'block';
                include('Model/CRUD_Database.php');
                include('Model/manager_admin/read_employee_table.php');
                include('View/admin.php');
                break;
            }
        case 'account': {
                include('Controller/Controller_account.php');
                break;
            }
    }
}
