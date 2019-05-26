<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Categories;

/* @var $this yii\web\View */
/* @var $model backend\models\Subcat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subcat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categories_id')->DropdownList(ArrayHelper::map(Categories::find()->all(),'id','name'),['prompt'=>'Categorie name'])->label('Categories') ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'image')->textInput(['maxlength' => true])->label('Image Url') ?>
    <?= $form->field($model, 'Description')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
