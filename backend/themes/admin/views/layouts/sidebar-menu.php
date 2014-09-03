<?php

/**
 * Sidebar menu layout.
 *
 * @var \yii\web\View $this View
 */

use backend\themes\admin\widgets\Menu;

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
            ['label' => Yii::t('themes', 'Menu'),
                'url' => ['/admin/menu'],
                'icon' => 'fa-group',],


            ['label' => Yii::t('themes', '---'),
                'url' => ['/admin/menu'],

                'icon' => 'fa-group',],
            ['label' => Yii::t('themes', 'register'),
                'url' => ['/user/registration/register'],
                'icon' => 'fa-group',],

//            ['label' => Yii::t('themes', 'resend'),
//                'url' => ['/user/registration/resend'],
//                'icon' => 'fa-group',],

//            ['label' => Yii::t('themes', 'confirm'),
//                'url' => ['/user/registration/confirm'],
//                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'login'),
                'url' => ['/user/security/login'],
                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'logout'),
                'url' => ['/user/security/logout'],
                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'request'),
                'url' => ['/user/recovery/request'],
                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'reset'),
                'url' => ['/user/recovery/reset'],
                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'profile'),
                'url' => ['/user/settings/profile'],
                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'email'),
                'url' => ['/user/settings/email'],
                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'password'),
                'url' => ['/user/settings/password'],
                'icon' => 'fa-group',],

            ['label' => Yii::t('themes', 'admin'),
                'url' => ['/user/admin/index'],
                'icon' => 'fa-group',],
        ]
    ]
);