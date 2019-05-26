<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\SwitchInput

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []) ?>

    <?php

 SwitchInput::widget([
    'name' => 'Categories[status]',
    'value' => -1,
    'tristate' => true,
    'indeterminateValue' => -1, // set indeterminate as -1 default is null
    'indeterminateToggle' => ['label'=>'&lt;i class="glyphicon glyphicon-remove-sign">&lt;/i>'],
    'pluginOptions' => [
        'labelText'=>'<i class="glyphicon glyphicon-stop"></i>'
    ]
]);
?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
