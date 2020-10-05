<?php
session_start();
require_once("connect.php");

if (isset($_POST['email'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['pwd'];
    $repwd = $_POST['repwd'];

    if ($pwd != $repwd){
        header('Location: ../../index.php?msg=Passwords don\'t match');
    } else {
        $query = "SELECT * FROM members WHERE email = '$email'";
        $stmt = $con->query($query);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($result)){
            header('Location: ../../index.php?msg=Email already exists');
        } else {
            $query = "INSERT INTO members VALUES (null, '$name', '$email', '$phone', '$pwd')";
            $con->query($query);

            $arr = [$name, $email, $pwd];
            $_SESSION['login'] = $arr;

            header('Location: ../../index.php');
        }
    }
} else {
    print <<<here
    <script>
        window.location.go(-1);
    </script>
here;
}
?>