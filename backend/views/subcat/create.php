<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Subcat */

$this->title = Yii::t('app', 'Create Subcat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subcats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subcat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
