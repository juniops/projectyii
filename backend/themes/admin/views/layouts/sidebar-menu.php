<?php

/**
 * Sidebar menu layout.
 *
 * @var \yii\web\View $this View
 */

use mdm\admin\components\MenuHelper;
use backend\themes\admin\widgets\Menu;

$menus = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, null, true);
if (!empty($menus)) {
    echo Menu::widget(
        [
            'options' => [
                'class' => 'sidebar-menu',
            ],
            'linkTemplate' => '<a href="{url}">{label}</a>',
            'items' => $menus,
        ]
    );
}