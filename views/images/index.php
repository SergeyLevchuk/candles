<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Images;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var Images[] $images */

$this->title = 'Галерея';
?>
<div class="images-index">
    <fieldset>

        <legend><h1><?= Html::encode($this->title) ?></h1></legend>

        <?php // echo $this->render('_search', ['model' => $searchModel]);
        ?>

        <?php $image = Images::find()->where(['candles_id' => $id])->all();
        foreach ($image as $item) {
            ?>
            <div>
                <?= Html::img('@web/Images/Images/' . $item->nameImage) ?>
            </div>

            <?php
        }
        if (!Yii::$app->user->isGuest) {
            echo Html::a('Добавить фото', Url::to(['upload', 'id'=>$_GET['id']]), [
                'class' => 'btn btn-success',
                'name' => 'create-button',
            ]);
        } ?>
    </fieldset>
</div>
