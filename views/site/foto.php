<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 17.08.2016
 * Time: 20:19
 */    echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Добавить запись', 'url' => ['/site/upload']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        Yii::$app->user->isGuest ? (
        ['label' => 'Login', 'url' => ['/site/login']]
        ) : (
            '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>'

        )
    ],
]);
NavBar::end();