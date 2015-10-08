<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LoansSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loans-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Loans', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
	    [
		'attribute'=>'userId',
		'label' => 'User name',
		//'value'=>'user.firstName',
		'value' => function($model) { return $model->user->firstName  . " " . $model->user->lastName ;},
	    ],
	//     [
	//	'attribute'=>'user_id',
	//	'label' => 'Last name',
	//	'value'=>'user.lastName',
	//    ],


         //   'loanId',
         //   'userId',
            'amount',
            'interest',
            'duration',
            // 'dateApplied',
            // 'dateLoanEnds',
            // 'campaign',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
