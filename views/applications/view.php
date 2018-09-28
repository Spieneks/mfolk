<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Applications */

$this->title = 'Заявка № '.$model->application_number;
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-view">

    <h1><?= Html::encode($this->title) ?></h1>
	
	<?php if (\Yii::$app->user->can('updatePost', ['author_id' => $model -> user_id])): ?>
	
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->application_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->application_number], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту заявку?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	<?php endif; ?>
	
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
