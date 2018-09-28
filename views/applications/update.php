<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Applications */

$this->title = 'Изменить заявку № ' . $model->application_number;
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Заявка № '.$model->application_number, 'url' => ['view', 'id' => $model->application_number]];
$this->params['breadcrumbs'][] = 'Изменить';
?> 
<div class="applications-update">

    <h1><?= Html::encode($this->title) ?></h1>	

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
