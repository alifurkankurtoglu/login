<?php

//ilk olarak localhost tarafında "login" veya farklı isimde bir dosya oluşturmanız gerekmektedir. 37. satırı etkilemektedir.
session_start();

?>

<html>
    <form name="form1" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="text"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SignIn" name="submit"></td>
            </tr>
        </table>
    </form>

</html>

<?php
if (isset($_POST['submit'])) {
    $v1 = "FirstUser";
    $v2 = "MyPassword";
    $v3 = $_POST['text'];
    $v4 = $_POST['pwd'];
    if ($v1 == $v3 && $v2 == $v4) {
        $_SESSION['luser'] = $v1;
        $_SESSION['start'] = time(); // Girilen zamanı tutuyor.
        $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);// Başlangıçtan itibaren süreci başlatıyor 30 dakika.
        header('Location: http://localhost/login/homepage.php');
    } else {
        echo "Please enter the username or password again!";
    }
}





?>