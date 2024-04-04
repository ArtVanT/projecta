<?php
/**
 * login page template
 */
if (!getUser()) {
    header("Location: /login");
}
$out = '';
for ($i = 0; $i < count($result); $i++) {
    $out .= '<section>';
    $out .= '<div>';
    $out .= '<h3 class="c">' . $result[$i]['title'] . '</h3>';
    $out .= '<img src="/static/image/' . $result[$i]['image'] . '" width=50>';
    $out .= '<p><a href="/admin/delete/' . $result[$i]['id'] . '" onclick="return confirm(\'Точно???\')" class="pure-button-primary pure-button">Удалить</a></p>';
    $out .= '<p><a href="/admin/update/' . $result[$i]['id'] . '" onclick="return confirm(\'Точно???\')" class="pure-button-primary pure-button">Обновить</a></p>';
    $out .= '</div><hr>';
    $out .= '</section>';
}

require_once 'header_admin.php';
?>
<div class="content pure-u-1 pure-u-md-3-4">
    <h1>Admin panel</h1>
    <?php
    echo $out;
    ?>
    <?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->