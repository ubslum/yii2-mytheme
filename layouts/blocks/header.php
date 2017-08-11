<?php

/**
 * @var $this \app\components\WebView
 */

use app\assets\AppAsset;
use app\extensions\DefaultTheme\assets\DefaultThemeAsset;
use app\extensions\DefaultTheme\models\ThemeParts;
use app\modules\seo\helpers\HtmlTagHelper;
use yii\helpers\Html;


AppAsset::register($this);
DefaultThemeAsset::register($this);

HtmlTagHelper::addTagOptions('html', 'lang', Yii::$app->language);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html<?= HtmlTagHelper::registerTagOptions('html')?>>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://<?=Yii::$app->getModule('core')->getBaseUrl() ?>">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="Remove là những chuyên gia hàng đầu về Tư vấn và Phát triển doanh nghiệp. Chúng tôi có thể giúp bạn lập kế hoạch kinh doanh, phân tích tính khả thi của kế hoạch kinh doanh, phân tích và tăng trưởng doanh nghiệp ">
    <meta name="keywords" content="kế hoạch kinh doanh, lập kế hoạch kinh doanh, viết kế hoạch kinh doanh, xây dựng kế hạch kinh doanh, remove, giai phap doanh nghiep, tu van, phat trien doanh nghiep, doanh nghiep vietnam, SMEs, vietnam, saigon, ho chi minh, loi nhuan, doanh so, doanh nghiep vua va nho,">
    <meta name="author" content="Remove team">
    <link href="https://fonts.googleapis.com/css?family=Lalezar|Roboto+Condensed:300,400,700|Roboto:300,300i,400,400i,500,700,900|Taviraj:200,300,300i,400,400i,500,500i,600,600i,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- CSS -->
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="css/style.css">-->
<!--    <link rel="stylesheet" href="css/style-responsive.css">-->
<!--    <link rel="stylesheet" href="css/animate.min.css">-->
<!--    <link rel="stylesheet" href="css/vertical-rhythm.min.css">-->
<!--    <link rel="stylesheet" href="css/owl.carousel.css">-->
<!--    <link rel="stylesheet" href="css/magnific-popup.css">-->

    <?= Html::csrfMetaTags() ?>
    <?php $this->head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<?php $this->beginBody(); ?>




