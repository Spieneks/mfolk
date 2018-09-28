<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasswordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пароли';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="passwords-index">

	<a href="/applications"><button type="button" class="btn btn-info">Заявки</button></a>
	<a href="/passportdata"><button type="button" class="btn btn-info">Данные заемщика</button></a>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать пароль', ['create'], ['class' => 'btn btn-success']) ?>
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
				'label' => 'Логин',
				'attribute' => 'login',
			],
			[
				'label' => 'Пароль',
				'attribute' => 'password',
			],

            
            
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
