<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Users;

/* @var $this yii\web\View */
/* @var $model app\models\Loans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->dropDownList( 
        ArrayHelper::map(Users::find()->all(), 'userId', 'FullName' ) ,
	['prompt'=>'Select User']
    ) ?>
    

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'dateApplied')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateLoanEnds')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campaign')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
