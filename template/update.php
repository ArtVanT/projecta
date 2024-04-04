<?php
/**
 * update page template
 */
$action = "Update";
$alert = '';

if (isset($_POST['submit'])) {
    $title = trim($_POST['title']);
    $url = trim($_POST['url']);
    $descr_min = trim($_POST['descr-min']);
    $description = trim($_POST['description']);
    $cid = $_POST['cid'];
    if (isset($_FILES['image']['tmp_name']) and $_FILES['image']['tmp_name'] != '') {
        move_uploaded_file($_FILES['image']['tmp_name'], 'static/image/' . $_FILES['image']['name']);
        $image = $_FILES['image']['name'];
    } else {
        $image = $result['image'];
    }

    $id = $route[2];

    $update = updateArticle($id, $title, $url, $descr_min, $description, $cid, $image);
    if ($update) {
        setcookie("alert", "Update ok", time() + 60 * 10);
        header('Location: ' . $_SERVER['REQUEST_URI']);
    } else {
        setcookie("alert", "Update error", time() + 60 * 10);
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }
}

if (isset($_COOKIE['alert'])) {
    $alert = $_COOKIE['alert'];
    setcookie("alert", "", time() - 60 * 10);
    unset($_COOKIE['alert']);

}
require_once 'header_admin.php';

?>
<div class="content pure-u-1 pure-u-md-3-4">
    <h1>Update</h1>
    <?php
    require_once '_form.php';
    echo $alert;
    require_once 'footer.php';
    ?>
</div>
</div>