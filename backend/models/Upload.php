<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\validators\FileValidator;

/**
 * This is the model class for table "upload".
 *
 * @property int $id
 * @property int $list_id
 * @property string $file
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Listing $list
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'upload';
    }

    //public $file;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
          //  [['file'], 'file', 'maxFiles' => 10],
            [['file'], 'required'],
            [['list_id'], 'integer'],
           
            [['file'], 'safe'],
            [['list_id'], 'exist', 'skipOnError' => true, 'targetClass' => Listing::className(), 'targetAttribute' => ['list_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'list_id' => 'List ID',
            'file' => 'File',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getList()
    {
        return $this->hasOne(Listing::className(), ['id' => 'list_id']);
    }
}
