<?php 

$errorLogin = "";

try {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $account = $_POST['account'];
        $password = MD5($_POST['password']);
    }
    if (!isset($connect)) {
        $connect = new PDO('mysql:dbname=db_sale_ecomm;host=localhost', 'vinhthanhle', 'thanh12345');
    }
    $checkAccount = $connect->prepare("SELECT account_code, account_name, account_password from accounts where account_name = '$account' ");
    $checkAccount->setFetchMode(PDO::FETCH_ASSOC);
    $checkAccount->execute();
    if ($row = $checkAccount->fetch()) {
        if($row['account_name'] === $account && $row['account_password'] === $password){
            $codeUser = $row['account_code'];
            $checkName = $connect->prepare("SELECT customer_fullname from customers where Accounts_account_code = '$codeUser' ");
            $checkName->setFetchMode(PDO::FETCH_ASSOC);
            $checkName->execute();
            $rowCustomer = $checkName->fetch();
            $nameUser = "Xin chào, ".$rowCustomer['customer_fullname'];
            header("location: ../index.php?name=$nameUser&account=$account&password=$password");
        }
        else{
            $errorLogin = "Mật khẩu bạn nhập sai!";
            header("location: login.php?error=$errorLogin");
        }
    }
    else{
        $errorLogin = "Tài khoản của bạn chưa tồn tại!";
        header("location: login.php?error=$errorLogin");
    }
} 
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

