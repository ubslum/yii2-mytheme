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
//DefaultThemeAsset::register($this);

//HtmlTagHelper::addTagOptions('html', 'lang', Yii::$app->language);
?>
<!DOCTYPE html>
<html ng-app="test_percDisplay">
<head>
    <title><?= Html::encode($this->title) ?></title>
</head>
<body ng-controller="mainController" style="font-family: Arial">
<div class="container">
    <?= $content ?>
</div>
</body>
</html>