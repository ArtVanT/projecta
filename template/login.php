<?php

//login page
if(isset($_POST["submit"])){
  $user = login($_POST['login'], $_POST['password']);
  if($user){
    $user = $user[0];
    $hash = md5(generateCode(10));
    $ip = null;
    if(!empty($_POST['ip'])){
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    updateUser($user['id'], $hash, $ip);
    setcookie('id', $user['id'], time()+60*60*24*30, "/");
    setcookie('hash', $hash, time()+60*60*24*30, "/");
    header('Location: /admin', );
    exit();

  }else{
    echo 'Incorrect login, or password';
  }
}



require_once 'header.php';
?>
<div class="content pure-u-1 pure-u-md-3-4">
    <h2>Логин</h2>

    <form method="POST" class="pure-form pure-form-stacked">
        Login: <input type="text" name="login" required ><br>
        Pass: <input type="text" name="password" required><br>
        Прикреплять к IP: <input type="checkbox" name="ip"><br>
        <input type="submit" name="submit" value="Войти"  class="pure-button-primary pure-button ">
    </form>
    <p>
        <a class="pure-button pure-button-primary" href="/">Назад</a>
    </p>

    <?php echo $out;?>
    <?php require_once 'footer.php'; ?>

</div>
</div>
</div><!-- layout end -->