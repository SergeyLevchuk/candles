<?php

use yii\helpers\Html;
use app\models\Candles;
use yii\helpers\Url;
use xj\bootbox\BootboxAsset;

BootboxAsset::registerWithOverride($this);


/* @var $this yii\web\View */
/* @var $searchModel app\models\CandlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var Candles[] $candles */


$this->title = 'Главная';
?>
<div>
    <fieldset>
        <legend><h1><?= Html::encode($this->title) ?></h1></legend>


        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?php
        $candles = Candles::find()->all();
        foreach ($candles as $image) {
            ?>
            <div class="imageBasic">
                <div id="text">
                    <?= $image->text; ?>
                </div>
                <?= Html::a(Html::img('@web/Images/preView/' . $image->basic), Url::to(['images/index', 'id' => $image->idcandles])) ?>
                <div id="delete">
                    <?php
                    if (!Yii::$app->user->isGuest) {
                        echo Html::a('Удалить', Url::to(['delete', 'id' => $image->idcandles]), [
                            'class' => 'btn btn-danger',
                            'name' => 'delete-button',
                            'data' => [
                                'confirm' => 'Вы уверены что хотите удалить всю композицию?',
                                'method' => 'post'
                            ]
                        ]);
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </fieldset>
</div>
