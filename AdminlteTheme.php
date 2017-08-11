<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace ubslum\mytheme;


use yii\base\Theme;

/**
 * Class AdminlteTheme
 * @package modernkernel\themeadminlte
 */
class AdminlteTheme extends Theme
{
    public $pathMap = [
        '@app/views' => '@vendor/ubslum/yii2-mytheme'
    ];

    public $themeColor='#367FA9'; // meta theme-color for android devices
    public $maskIconColor='#F4F4F5'; // safari pinned tab color
    public $tileColor='#367FA9'; // Windows Phone

    public $skin = 'skin-blue'; // skin-blue, skin-blue-light, skin-yellow, skin-yellow-light, skin-green, skin-green-light, skin-purple, skin-purple-light, skin-red, skin-red-light, skin-black, skin-black-light
    public $layout='sidebar-mini'; // fixed, sidebar-mini, sidebar-collapse, layout-boxed, layout-top-nav (Note: you cannot use both layout-boxed and fixed at the same time. Anything else can be mixed together)
    public $options='hold-transition';
    public $bodyClass='';


    public function init()
    {
        parent::init();
        $this->bodyClass=$this->options.' '.$this->skin.' '.$this->layout;
    }
}