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
            'items' => $menus,
        ]
    );
}

echo Menu::widget(
    [
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => [
            [
                'label' => Yii::t('themes', 'Dashboard'),
                'url' => Yii::$app->homeUrl,
                'icon' => 'fa-dashboard',
                'active' => Yii::$app->request->url === Yii::$app->homeUrl
            ],
            [
                'label' => Yii::t('themes', 'Users'),
                'url' => ['/users/default/index'],
                'icon' => 'fa-group'
            ],
            [
                'label' => Yii::t('themes', 'Assigment'),
                'url' => ['/admin/assigment'],
                'icon' => 'fa-group'
            ],
            [
                'label' => Yii::t('themes', 'Role'),
                'url' => ['/admin/role'],
                'icon' => 'fa-group'
            ],
            [
                'label' => Yii::t('themes', 'Permission'),
                'url' => ['/admin/permission'],
                'icon' => 'fa-group'
            ],
            [
                'label' => Yii::t('themes', 'Route'),
                'url' => ['/admin/route'],
                'icon' => 'fa-group'
            ],
            [
                'label' => Yii::t('themes', 'Rule'),
                'url' => ['/admin/rule'],
                'icon' => 'fa-group'
            ],
            [
                'label' => Yii::t('themes', 'Menu'),
                'url' => ['/admin/menu'],
                'icon' => 'fa-group',
            ],

        ]
    ]
);