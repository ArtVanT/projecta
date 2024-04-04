<?php
/**
 * main page template
 */
require_once 'header.php';
$out = '';
for ($i = 0; $i < count($result); $i++) {
    $out .= '<div class="posts"> <h1 class="content-subhead">Post</h1><section class="post">';
    $out .= '<h1 class="post-title">' . $result[$i]['title'] . '</h1>';
    $out .= '<div class="post-description"><p>' . $result[$i]['descr_min'] . '</p></div>';
    $out .='<div class="post-images pure-g"><div class="pure-u-1 pure-u-md-1-6">';
    $out .= '<img src="/static/image/' . $result[$i]['image'] . '" class="pure-img-responsive">';
    $out .= '</div></div>';
    $out .= '<div><a href="/article/' . $result[$i]['url'] . '" class="pure-button pure-button-primary">Читать полностью</a></div>';
    $out .= '</section></div>';
}
?>


<div class="content pure-u-1 pure-u-md-3-4">
        <?php echo $out; ?>
        <?php require_once 'footer.php'; ?>
    </div>
</div>
</div><!-- layout end -->