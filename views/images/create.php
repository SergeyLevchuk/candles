<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Images */

$this->title = 'Добавить фото к композиции';
?>
<div class="images-create">

    <fieldset>

        <legend><h1><?= Html::encode($this->title) ?></h1></legend><br>


        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>


</div>
