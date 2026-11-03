
<?php
session_start();
if(isset($_POST['login']){
    $login = $_POST['login'];
    $password = $_POST['password'];

    if($login =="admin" && $password == "tajnehaslo321"){
        $_SESSION['login'] = $login;
        header("location: wyniki.php")
    }
})
$connect = mysqli_connect("localhost","root","","laboratorium");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post">
            <label for="login">login</label>
            <input type="text" id="login" name="login">
            <label for="password">Haslo</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="zatwierdz">

        </form>

</body>
</html>
<?php
mysqli_close($connect);
?>