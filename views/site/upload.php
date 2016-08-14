<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Candles*/
namespace  app\models;


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Candles;

$this->title = 'Upload';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-upload">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Добавьте файл для загрузки:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'uploadBasicImage-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
