<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Passportdata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="passportdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['enableLabel' => true])->label('ID заемщика') ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true],['enableLabel' => true])->label('ФИО') ?>

    <?= $form->field($model, 'passport_number')->textInput(['enableLabel' => true])->label('Номер паспорта') ?>

    <?= $form->field($model, 'date_issue')->textInput(['enableLabel' => true])->label('Номер выдачи') ?>

    <?= $form->field($model, 'organizations')->textInput(['maxlength' => true],['enableLabel' => true])->label('Кем выдан') ?>

    <?= $form->field($model, 'birthdate')->textInput(['enableLabel' => true])->label('Дата рождения') ?>

    <?= $form->field($model, 'birthplace')->textInput(['maxlength' => true],['enableLabel' => true])->label('Место рождения') ?>

    <?= $form->field($model, 'registration_address')->textInput(['maxlength' => true],['enableLabel' => true])->label('Адрес регистрации') ?>

    <?= $form->field($model, 'residential_address')->textInput(['maxlength' => true],['enableLabel' => true])->label('Адрес проживания') ?>

    <?= $form->field($model, 'phone')->textInput(['enableLabel' => true])->label('Телефон') ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true],['enableLabel' => true])->label('Электронная почта') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
