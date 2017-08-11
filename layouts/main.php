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
        <!-- Navigation panel -->
        <nav class="main-nav dark js-stick">
            <div class="full-wrapper relative clearfix">
                <div class="nav-logo-wrap local-scroll">
                    <a href="http://www.remove.vn/" class="logo">
                        <img src="images/logo-remove.png" width="118" height="27" alt="logo-remove-saigon" /></a></div><div class="mobile-nav"><i class="fa fa-bars"></i></div>
                <!-- Main Menu -->
                <div class="inner-nav desktop-nav"><ul class="clearlist">
                        <li><a href="http://www.remove.vn/" style="height: 75px; line-height: 75px;">Trang chủ <i class="fa fa-angle-down"></i></a></li>
                        <li><a href="bao-cao-danh-gia-y-tuong-kinh-doanh" class="mn-has-sub active" style="height: 75px; line-height: 75px;">Đánh Giá Ý Tưởng Kinh Doanh<i class="fa fa-angle-down"></i></a>
<!--                            <ul class="mn-sub">-->
<!--                                <li><a href="ve-chung-toi.html">GIỚI THIỆU </a></li>-->
<!--                                <li><a href="to-be-updated.html">THÔNG CÁO BÁO CHÍ </a></li>-->
<!--                                <li><a href="to-be-updated.html">THƯ VIỆN ẢNH </a></li>-->
<!--                                <li><a href="lien-he.html">LIÊN HỆ </a></li>-->
<!--                            </ul>-->
                        </li>

                        <!-- End Languages -->
                    </ul>
                </div>
                <!-- End Main Menu -->
            </div></nav>
        <!-- End Navigation panel -->

        <!-- Head Section - Remove -->
        <section class="page-section bg-dark-alfa-50 parallax-3" data-background="images/background/black-2.jpg" style="background-image: url('images/background/black-2.jpg');background-position: 50% 23px;">
            <div class="relative container align-left">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0" style="color: #FFF;">Đánh Giá Ý Tưởng Kinh Doanh</h1>
                        <div class="hs-line-4 font-alt">REMOVE</div>
                    </div>
                    <div class="col-md-4 mt-30">
                        <div class="mod-breadcrumbs font-alt align-right">
                            <a href="http://www.remove.vn/">Trang chủ</a>&nbsp;/&nbsp;<span>Đánh Giá Ý Tưởng Kinh Doanh</span>
                        </div></div></div></div>
        </section>
        <?= $content ?>
        <?php include('blocks/footer.php') ?>
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
