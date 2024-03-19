<?php
//ilk olarak localhost tarafında "login" veya farklı isimde bir dosya oluşturmanız gerekmektedir. 6. satırı etkilemektedir.
    session_start();
    session_destroy();
    header('Location: http://localhost/login/login.php');
?>