<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApplicationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-index">

	<a href="/passwords"><button type="button" class="btn btn-info">Пароли</button></a>
	<a href="/passportdata"><button type="button" class="btn btn-info">Данные заемщика</button></a>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать заявку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
			[
				'label' => '№ заявки',
				'attribute' => 'application_number',
			],
			[
				'label' => 'Статус заявки',
				'attribute' => 'application_status',
			],
			[
				'label' => 'Дата оформления заявки',
				'attribute' => 'start_date',
			],
			[
				'label' => 'Сумма займа',
				'attribute' => 'sum_start',
			],
			[
				'label' => 'Дата окончательной выплаты',
				'attribute' => 'end_date',
			],
			[
				'label' => 'Осталось выплатить',
				'attribute' => 'sum_end',
			],
			[
				'label' => 'Уже выплачено',
				'attribute' => 'sum_already',
			],
			[
				'label' => 'ID заемщика',
				'attribute' => 'user_id',
			],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
