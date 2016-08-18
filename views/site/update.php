<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candles */

$this->title = 'Update Candles: ' . $model->idcandles;
$this->params['breadcrumbs'][] = ['label' => 'Candles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcandles, 'url' => ['view', 'id' => $model->idcandles]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
