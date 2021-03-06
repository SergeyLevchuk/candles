<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Candles */
namespace  app\models;


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Загрузка';
?>
<div class="site-upload">
    <fieldset>

        <legend><h1>Загрузка основной композиции</h1></legend>

        <p><h3>Добавьте файл для загрузки:</h3></p><br>

        <?php $form = ActiveForm::begin([
            'id' => 'uploadBasicImage-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'text')->textInput() ?>

        <?= $form->field($model, 'imageFile')->fileInput() ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </fieldset>
</div>
