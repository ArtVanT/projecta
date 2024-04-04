<?php
/**
 * register page template
 */

$out ='';
var_dump($_POST['login']);
if (isset($_POST['submit'])) {
    echo 1;
    $err = [];
    if (strlen($_POST['login']) < 4 OR strlen($_POST['login']) > 30) {
        $err[] = "Логин не меньше 4 и не больше 30";
    }
    if (isLoginExist($_POST['login'])) {
        $err[] = "Логин существует";
    }
    if (count($err) == 0) {
        createUser($_POST['login'], $_POST['password']);
        header('Location: /login');
        exit();
    } else {
        $out = '<h4>Ошибки регистрации</h4>';
        foreach ($err as $error) {
           $out.= $error . '<br>';
        }
    }
}


require_once 'header.php';

?>
<div class="content pure-u-1 pure-u-md-3-4">
    <h2>Регистрация</h2>



    <form method="POST"  class="pure-form pure-form-stacked">
        Login: <input type="text" name="login" required><br>
        Pass: <input type="text" name="password" required><br>
        <input type="submit" name="submit" value="Регистрация" class="pure-button-primary pure-button ">
    </form>
    <p>
    <a class="pure-button pure-button-primary" href="/">Назад</a>
    </p>
    <?php echo $out;?>
    <?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->