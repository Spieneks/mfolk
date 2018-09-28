<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Passportdata */

$this->title = 'Изменить паспортные данные: ' . $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Паспортные данные', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fio, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="passportdata-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
