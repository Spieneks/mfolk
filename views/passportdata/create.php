<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Passportdata */

$this->title = 'Создать поспортные данные';
$this->params['breadcrumbs'][] = ['label' => 'Паспорные данные', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="passportdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
