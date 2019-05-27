<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\widgets\FileInput;
use yii\helpers\Url;
use kartik\field\FieldRange;
use kartik\widgets\TimePicker;
use unclead\multipleinput\MultipleInput;
//use kartik\widgets\DateTimePicker;



/* @var $this yii\web\View */
/* @var $model backend\models\Listing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listing-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<?php
$sql='SELECT CONCAT(s.`name` ," | ",c.name) as search, s.`name` ,c.name,s.id from subcat as s join categories as c on s.`categories_id`=c.id';
$connection = Yii::$app->getDb();
$command = $connection->createCommand($sql);
$res=$command->execute();
$res=$command->queryAll();

    $data=ArrayHelper::map($res,'id','search');

    echo $form->field($model, 'subcat_id')->widget(Select2::classname(), [
        'data' => $data,
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ])->label('Categories');
?>


<?php
 //echo $form->field($model, 'imageFile')->fileinput();
 if($model->imgvalid=='update'){
    $images= \backend\models\Upload::find()->where(["list_id"=>$model->id])->asArray()->all();
 }

 echo FileInput::widget([
    'name' => 'Listing[imageFile]',
    'options'=>[
        'multiple'=>true
    ],
    'pluginOptions' => [
        'initialPreview'=>[
            isset($images[0]) ? Url::to('@web/'.$images[0]['file']) : "",
            isset($images[1]) ? Url::to('@web/'.$images[1]['file']) : "",
            isset($images[2]) ? Url::to('@web/'.$images[2]['file']) : "",
            isset($images[3]) ? Url::to('@web/'.$images[3]['file']) : "",
        ],
        'initialPreviewAsData'=>true,
        'initialCaption'=>"Select File",
        // 'initialPreviewConfig' => [
        //     ['caption' => 'Moon.jpg', 'size' => '873727'],
        //     ['caption' => 'Earth.jpg', 'size' => '1287883'],
        // ],
        'overwriteInitial'=>false,
        'maxFileSize'=>2800
    ]
]); 

?>


    <?php // $form->field($model, 'subcat_id')->DropdownList($data,['prompt'=>'Categorie name'])->label('Categories') ?>
    
    <?php // $form->field($model, 'subcat_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
   $days = array(
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday',
    7 => 'Sunday');
//

?>

<?php
 FieldRange::widget([
    'form' => $form,
    'model' => $model,
    'label' => 'Enter start and end Day',
    'attribute1' => 'day_start',
    'attribute2' => 'day_end',
    'type' => FieldRange::INPUT_DROPDOWN_LIST,
    'items1' => $days,
    'items2' => $days,
]);

 FieldRange::widget([
    'form' => $form,
    'model' => $model,
    'label' => 'Enter time range',
    'attribute1' => 'time_start',
    'attribute2' => 'time_end',
    'type' => FieldRange::INPUT_TIME,
]);
?>

<?= $form->field($model, 'timetable')->widget(MultipleInput::className(), [
    'max' => 10,
    'cloneButton' => true,
    'columns' => [
        [
            'name'  => 'day',
            'type'  => 'dropDownList',
            'title' => 'Select Day Time',
            'defaultValue' => 1,
            'items' => $days,
            // [
            //     1 => 'id: 1, price: $19.99, title: product1',
            //     2 => 'id: 2, price: $29.99, title: product2',
            //     3 => 'id: 3, price: $39.99, title: product3',
            //     4 => 'id: 4, price: $49.99, title: product4',
            //     5 => 'id: 5, price: $59.99, title: product5',
            // ],
        ],
        [
            'name'  => 'time_start',
            'type'  =>FieldRange::INPUT_TIME,
            'title' => 'Opens at',
            'defaultValue' => date('d-m-Y h:i')
        ],
        [
            'name'  => 'time_end',
            'type'  =>FieldRange::INPUT_TIME,
            'title' => 'Closes at',
            'defaultValue' => date('d-m-Y h:i')
        ],
        
           
        
        // [
        //     'name'  => 'count',
        //     'title' => 'Count',
        //     'defaultValue' => 1,
        //     'enableError' => true,
        //     'options' => [
        //         'type' => 'number',
        //         'class' => 'input-priority',
        //     ]
        // ]
    ]
])->label(false); ?>

<?php /*
<?=  $form->field($model, 'day_start')->DropdownList(($days),['prompt'=>'From'])->label('Day Start') ?>
<?=  $form->field($model, 'day_end')->DropdownList(($days),['prompt'=>'To'])->label('Day End') ?>
*/?>
    <?php // $form->field($model, 'day_start')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'day_end')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'time_start')->textInput() ?>

    <?php // $form->field($model, 'time_end')->textInput() ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php /*
    <script>
$('#billing_phone').typeahead({
        source: function(query, result)
        {
         $.ajax({
         url: HomeURL + "/handler/getusers.php",
         method:"POST",
         data:{AllPhoneList:query},
         dataType:"json",
         success:function(data)
          {
         result($.map(data, function(item){
            return item;
           }));
          }
         })
        },
        afterSelect: function (item) {
            $.ajax({
                url: HomeURL + "/handler/getusers.php",
             method:"POST",
             data:{CustomerGetByPhone:item},
             dataType:"json",
             success:function(data)
               {
                 console.log(data);
                 $("#billing_title").val(data[0].customername);
                    $("#billing_email").val(data[0].email);
                    $("#billing_phone").val(data[0].phone);
               }
              })
        }
       });

        </script>
        */ ?>

</div>
