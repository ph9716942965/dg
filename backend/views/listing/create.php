<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Listing */

$this->title = Yii::t('app', 'Create Listing');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Listings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
