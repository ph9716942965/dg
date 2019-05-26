<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "subcat".
 *
 * @property int $id
 * @property int $categories_id
 * @property string $name
 * @property string $image
 * @property string $Description
 * @property int $status
 *
 * @property Listing[] $listings
 * @property Categories $categories
 */
class Subcat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
   

    public static function tableName()
    {
        return 'subcat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categories_id', 'name', 'image', 'Description'], 'required'],
            
            [['categories_id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 99],
            [['image'], 'string', 'max' => 200],
            [['Description'], 'string', 'max' => 1000],
            [['categories_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['categories_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categories_id' => 'Categories ID',
            'name' => 'Name',
            'image' => 'Image',
            'Description' => 'Description',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasMany(Listing::className(), ['subcat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'categories_id']);
    }
}
