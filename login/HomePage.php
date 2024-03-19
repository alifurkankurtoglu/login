<?php
//ilk olarak localhost tarafında "login" veya farklı isimde bir dosya oluşturmanız gerekmektedir. 7-14-21. satırı etkilemektedir.
    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "Please Login again";
        echo "<a href='http://localhost/login/login.php'>Click Here to Login</a>";
    }
    else {
        $now = time(); // Homepage ne zaman başlıyor zamanını tutuyor.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='http://localhost/login/login.php'>Login here</a>";
        }
        else { //Starting this else one [else1]
?>
            <!--İşlemler TAMAM-->
            <html>
                Welcome
                <?php
                    echo $_SESSION['luser'];
                    echo "<a href='http://localhost/login/logout.php'>Log out</a>";
                ?>
            </html>
<?php
        }
    }
?>