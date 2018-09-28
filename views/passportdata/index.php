<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PassportdataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Данные заемщика';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="passportdata-index">

	<a href="/passwords"><button type="button" class="btn btn-info">Пароли</button></a>
	<a href="/applications"><button type="button" class="btn btn-info">Заявки</button></a>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать данные заемщика', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
			[
				'label' => 'ID пользователя',
				'attribute' => 'user_id',
			],
			[
				'label' => 'ФИО',
				'attribute' => 'fio',
			],
			[
				'label' => 'Номер паспорта',
				'attribute' => 'passport_number',
			],
			[
				'label' => 'Дата выдачи',
				'attribute' => 'date_issue',
			],
			[
				'label' => 'Кем выдан',
				'attribute' => 'organizations',
			],
			[
				'label' => 'Дата рождения',
				'attribute' => 'birthdate',
			],
			[
				'label' => 'Место рождения',
				'attribute' => 'birthplace',
			],
			[
				'label' => 'Адрес регистрации',
				'attribute' => 'registration_address',
			],
			[
				'label' => 'Адрес проживания',
				'attribute' => 'residential_address',
			],
			[
				'label' => 'Телефон',
				'attribute' => 'phone',
			],
			[
				'label' => 'Электронная почта',
				'attribute' => 'mail',
			],
			
           
            
            
            
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
