<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ListingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Listings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Listing'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'subcat_id',
            'subcat.categories.name',
            'subcat.name',
            'name',
            //'day_start',
            //'day_end',
            //'time_start',
            //'time_end',
            //'contact',
            //'address',
            //'description',
            //'latitude',
            //'longitude',
            //'status',
            [
                //'attribute' => 'status',
                'format' => 'raw',
                'value' => function ($model) {   
                   return ($model->status==1) 
                    ? '<i class="material-icons text-success"> check_circle_outline </i>'
                    : '<i class="material-icons text-danger">highlight_off</i>' ;             
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
