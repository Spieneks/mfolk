<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Passportdata */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Паспортные данные', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="passportdata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

	<p><b>ID заемщика:</b> <?= Html::encode($model->user_id) ?></p>
	<p><b>ФИО:</b> <?= Html::encode($model->fio) ?></p>
	<p><b>Номер паспорта:</b> <?= Html::encode($model->passport_number) ?></p>
	<p><b>Дата выдачи:</b> <?= Html::encode($model->date_issue) ?></p>
	<p><b>Кем выдан:</b> <?= Html::encode($model->organizations) ?></p>
	<p><b>Дата рождения:</b> <?= Html::encode($model->birthdate) ?></p>
	<p><b>Место рождения:</b> <?= Html::encode($model->birthplace) ?></p>
	<p><b>Адрес регистрации:</b> <?= Html::encode($model->registration_address) ?></p>
	<p><b>Адрес проживания:</b> <?= Html::encode($model->residential_address) ?></p>
	<p><b>Телефон:</b> <?= Html::encode($model->phone) ?></p>
	<p><b>Электронная почта:</b> <?= Html::encode($model->mail) ?></p>
	
   <!-- <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'fio',
            'passport_number',
            'date_issue',
            'organizations',
            'birthdate',
            'birthplace',
            'registration_address',
            'residential_address',
            'phone',
            'mail',
        ],
    ]) ?>-->

</div>
