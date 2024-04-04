<?php
/**
 * create page template
 */

$action = "Create";

if (isset($_POST['submit'])) {
    $title = trim($_POST['title']);
    $url = trim($_POST['url']);
    $descr_min = trim($_POST['descr-min']);
    $description = trim($_POST['description']);
    $cid = $_POST['cid'];

    move_uploaded_file($_FILES['image']['tmp_name'], 'static/image/' . $_FILES['image']['name']);
    $image = $_FILES['image']['name'];

    $create = createArticle($title, $url, $descr_min, $description, $cid, $image);
    if ($create) {
        header('Location: /admin');
    } else {
        setcookie("alert", "create error", time() + 60 * 10);
    }
    if (isset($_COOKIE['alert'])) {
        $alert = $_COOKIE['alert'];
        setcookie("alert", "", time() - 60 * 10);
        unset($_COOKIE['alert']);
        echo $alert;
    }
} else {
    $result = array(
        "title" => "",
        "url" => "",
        "descr_min" => "",
        "description" => "",
        "cid" => "",
        "image" => ""
    );
}
require_once 'header_admin.php';
?>

<div class="content pure-u-1 pure-u-md-3-4">
<h1>Create</h1>
<?php
    require_once '_form.php';
    require_once 'footer.php';
?>
</div>
</div>