<?php
require './includes/config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

$page_title = 'User Manual';

include './includes/header.php';
?>

<a href="https://online.flippingbook.com/view/303222985/" class="fbo-embed" data-fbo-id="303222985" data-fbo-ratio="3:2" data-fbo-lightbox="yes" data-fbo-width="100%" data-fbo-height="auto" data-fbo-version="1" style="max-width: 100%">USER MANUAL</a><script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=303222985"></script>


<?php
include './includes/footer.php';
?>