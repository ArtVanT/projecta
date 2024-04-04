<?php
/**
 * article page template
 */

require_once 'header.php';
$out = '';
$out .= '<div class="posts"> ';
$out .= '<div >';
$out .= '<h4 class="post-title">' . $result['title'] . '</h4>';
$out .= '<p class="post-description">' . $result['descr_min'] . '</p>';
$out .= '<div class="post-images pure-g"><div class="pure-u-1 pure-u-md-1-6">';
$out .= '<img src="/static/image/' . $result['image'] . '" class="pure-img-responsive">';
$out .= '</div></div>';
$out .= '<div>' . $result['description'] . '</div>';
$out .= '</div>';
$out .= '</div>';
?>
<div class="content pure-u-1 pure-u-md-3-4">
    <?php echo $out; ?>
    <a class="pure-button pure-button-primary" href="/">Назад</a>
    <?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->