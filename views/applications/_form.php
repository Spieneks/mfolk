<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Applications */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applications-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'application_number')->textInput(['enableLabel' => true])->label('Номер заявки') ?>

    <?= $form->field($model, 'application_status')->textInput(['enableLabel' => true])->label('Статус заявки') ?>

    <?= $form->field($model, 'start_date')->textInput(['enableLabel' => true])->label('Дата создания заявки') ?>

    <?= $form->field($model, 'sum_start')->textInput(['enableLabel' => true])->label('Сумма займа') ?>

    <?= $form->field($model, 'end_date')->textInput(['enableLabel' => true])->label('Дата возврата займа') ?>

    <?= $form->field($model, 'sum_end')->textInput(['enableLabel' => true])->label('Сумма возврата') ?>

    <?= $form->field($model, 'sum_already')->textInput(['enableLabel' => true])->label('Уже возвращено') ?>

    <?= $form->field($model, 'user_id')->textInput(['enableLabel' => true])->label('ID заемщика') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
