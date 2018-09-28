<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApplicationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applications-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'application_number') ?>

    <?= $form->field($model, 'application_status') ?>

    <?= $form->field($model, 'start_date') ?>

    <?= $form->field($model, 'sum_start') ?>

    <?= $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'sum_end') ?>

    <?php // echo $form->field($model, 'sum_already') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
