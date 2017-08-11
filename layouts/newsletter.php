<?php

/**
 * @var $content string
 * @var $this \yii\web\View
 */

use app\widgets\Alert;
use yii\widgets\Breadcrumbs;
use app\extensions\DefaultTheme\models\ThemeParts;

$leftSidebar = ThemeParts::renderPart('left-sidebar');
$rightSidebar = ThemeParts::renderPart('right-sidebar');
$contentLength = 12;
$leftSidebarLength = 3;
$rightSidebarLength = 3;

if (empty($leftSidebar) === false) {
    $contentLength -= $leftSidebarLength;
}
if (empty($rightSidebar) === false) {
    $contentLength -= $rightSidebarLength;
}

?>
<?php include('blocks/header.php') ?>
    <div class="page" id="top">
        <?= $content ?>
        <?php include('blocks/newsletter-footer.php') ?>
    </div><!-- JS -->
    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
    Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/857251964/?guid=ON&amp;script=0"/>
        </div>
    </noscript>
