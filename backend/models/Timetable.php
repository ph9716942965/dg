<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "timetable".
 *
 * @property int $id
 * @property int $listing_id
 * @property string $day
 * @property string $time_start
 * @property string $time_end
 * @property int $status
 *
 * @property Listing $listing
 */
class Timetable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timetable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'listing_id', 'day', 'time_start', 'time_end'], 'required'],
            [['listing_id', 'status'], 'integer'],
            [['day'], 'string', 'max' => 10],
            [['time_start', 'time_end'], 'string', 'max' => 15],
            [['listing_id'], 'exist', 'skipOnError' => true, 'targetClass' => Listing::className(), 'targetAttribute' => ['listing_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'listing_id' => 'Listing ID',
            'day' => 'Day',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListing()
    {
        return $this->hasOne(Listing::className(), ['id' => 'listing_id']);
    }

    public static function savetime($listing_id,$arr){
        $count=1;
        foreach($arr as $ttbl)
        {
            if($count){
                $connection = \Yii::$app->db;
                $connection->createCommand()->delete('timetable', 'listing_id = '.$listing_id)->execute();
                $count=0;
            }
            $timetable=new Timetable();
            $timetable->listing_id=$listing_id;
            $timetable->day=$ttbl['day'];
            $timetable->time_start=$ttbl['time_start'];
            $timetable->time_end=$ttbl['time_end'];
            $timetable->save();
        }
    }
}
