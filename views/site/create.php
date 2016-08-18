<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Candles */

$this->title = 'Create Candles';
$this->params['breadcrumbs'][] = ['label' => 'Candles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
