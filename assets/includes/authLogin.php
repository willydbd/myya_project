<?php
session_start();
require_once("connect.php");

if (isset($_POST['username'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $arr = [];

    $query = "SELECT * FROM members WHERE email = '$uname'";
    $stmt = $con->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (empty($result) || $pwd != $result['password']){
        header('Location: /?err=Incorrect Username or Password');
    } else {
        $arr = [$result['name'], $uname, $pwd];
        $_SESSION['login'] = $arr;
        header('Location: /games.php');
    }

} else {
    print <<<here
    <script>
        window.history.go(-1);
    </script>
here;
}
?>
