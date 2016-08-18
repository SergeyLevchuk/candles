<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Candles;
use yii\helpers\Url;
use xj\bootbox\BootboxAsset;
BootboxAsset::registerWithOverride($this);


/* @var $this yii\web\View */
/* @var $searchModel app\models\CandlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Candles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    /** @var Candles[] $candles */
    $candles = Candles::find()->all();
    foreach ($candles as $image) {
        ?>
        <div>
            <a href="foto.php">
                <?= Html::img('@web/preView/' . $image->basic) ?>
            </a>
            <?php
            if (!Yii::$app->user->isGuest) {
                echo Html::a('Удалить', Url::to(['delete', 'id' => $image->idcandles]), [
                    'class' => 'btn btn-danger',
                    'name' => 'delete-button',
                    'data'=>[
                        'confirm'=>'Вы уверены что хотите удалить всю композицию?',
                        'method'=>'post'
                    ]
                ]);
            }
            ?>
        </div>
        <?php
    }
    ?>
</div>
