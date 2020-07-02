<?php

$table = 
"<table>
    <tr>
        <th>Mã nhân viên</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Email</th>
        <th>Chức vụ</th>
        <th>Lương</th>
        <th>Tài khoản</th>
        <th>Mật khẩu</th>
    </tr>
";
$employee = new CRUD_Database;
$employee->connect();
$sql = "SELECT * FROM employee_info";
$employee_table = $employee->executeAll($sql);
foreach($employee_table as $key => $value){
    $table .= "<tr>";
    $code = $value['employee_code'];
    $table .= "<td>$code</td>";
    $name = $value['employee_fullname'];
    $table .= "<td>$name</td>";
    $birthday = $value['employee_birthday'];
    $table .= "<td>$birthday</td>";
    $phone = $value['employee_phone'];
    $table .= "<td>$phone</td>";
    $email = $value['employee_email'];
    $table .= "<td>$email</td>";
    $possition = $value['employee_possition'];
    $table .= "<td>$possition</td>";
    $salary = $value['employee_salary'];
    $table .= "<td>$salary</td>";
    $join_day = $value['employee_join_day'];
    $table .= "<td>$join_day</td>";
    $account = $value['account_name'];
    $table .= "<td>$account</td>";
    $password = $value['account_password'];
    $table .= "<td>$password</td>";
    $table .= "</tr>";
}
$table .= "</table>";

?>
