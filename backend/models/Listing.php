<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "listing".
 *
 * @property int $id
 * @property int $subcat_id
 * @property string $name
 * @property string $day_start
 * @property string $day_end
 * @property string $time_start
 * @property string $time_end
 * @property string $contact
 * @property string $address
 * @property string $description
 * @property string $latitude
 * @property string $longitude
 * @property int $status
 *
 * @property Subcat $subcat
 * @property Timetable[] $timetables
 * @property Upload[] $uploads
 */
class Listing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public $imgvalid;
    public $timetable;
    const SCENARIO_UPDATE = 'update'; 
    public static function tableName()
    {
        return 'listing';
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->user_id = Yii::$app->user->identity->id;
    }


    public function rules()
    {
        return [
            [['subcat_id', 'name', 'timetable','contact', 'address', 'description', 'latitude', 'longitude'], 'required'],
            [['subcat_id', 'status','user_id'], 'integer'],
            [['imageFile'], 'file', 'skipOnEmpty' => ($this->imgvalid === self::SCENARIO_UPDATE), 'extensions' => 'png, jpg','maxFiles' => 5, 'checkExtensionByMimeType'=>false],
            [['time_start', 'time_end','timetable'], 'safe'],
            [['name', 'day_start', 'day_end', 'contact', 'latitude', 'longitude'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 400],
            //[['timetable']]
            [['description'], 'string', 'max' => 1000],
            [['subcat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subcat::className(), 'targetAttribute' => ['subcat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subcat_id' => 'Subcat ID',
            'name' => 'Name',
            'day_start' => 'Day Start',
            'day_end' => 'Day End',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'contact' => 'Contact',
            'address' => 'Address',
            'description' => 'Description',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'status' => 'Status',
            'timetable'=>'time Table'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcat()
    {
        return $this->hasOne(Subcat::className(), ['id' => 'subcat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimetables()
    {
        return $this->hasMany(Timetable::className(), ['listing_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploads()
    {
        return $this->hasMany(Upload::className(), ['list_id' => 'id']);
    }
}
