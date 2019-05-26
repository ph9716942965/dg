<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

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
 */
class Listing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public $imgvalid;
    const SCENARIO_UPDATE = 'update'; 

    public static function tableName()
    {
        return 'listing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subcat_id', 'name', 'day_start', 'day_end', 'time_start', 'time_end', 'contact', 'address', 'description', 'latitude', 'longitude'], 'required'],
            [['subcat_id', 'status'], 'integer'],
            [['imageFile'], 'file', 'skipOnEmpty' => ($this->imgvalid === self::SCENARIO_UPDATE), 'extensions' => 'png, jpg','maxFiles' => 5],
           
            [['time_start', 'time_end'], 'safe'],
            [['name', 'day_start', 'day_end', 'contact', 'latitude', 'longitude'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 400],
            [['description'], 'string', 'max' => 1000],
            [['subcat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subcat::className(), 'targetAttribute' => ['subcat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */


    public function upload($reqid=null,$url=null)
    {
        if ($this->validate()) {
            if($url){
                $connection = Yii::$app->getDb();
                $fil = Upload::find($reqid)->where('id = '.$reqid);
                foreach ($this->imageFile as $file) {
                    $connection->createCommand()->update('upload', ['url' => 'uploads/' . $file->baseName . '.' . $file->extension,], ['id' => $reqid])->execute();
                    // if($this->s3DeleteImages($url)){
                    //     //echo "Image delete <br>".$url;exit;
                    //     return true;
                    // }
                }
            }else{
            $fdb=new Upload;
            $fdb->list_id=$reqid;
            $fdb->list_id=1;
            foreach ($this->imageFile as $file) {
               // print_r($file);exit;
               // $fdb->url=$this->imageUplodeOns3($file->tempName,$file->baseName.'.'.$file->extension);
                $fdb->file='upload/' . $file->baseName . '.' . $file->extension;
                $fdb->save();
                $fdb->saveAs('upload/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        }} else {
            return false;
        }
    }

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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcat()
    {
        return $this->hasOne(Subcat::className(), ['id' => 'subcat_id']);
    }
}
