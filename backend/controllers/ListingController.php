<?php

namespace backend\controllers;

use Yii;
use backend\models\Listing;
use backend\models\ListingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Upload;

/**
 * ListingController implements the CRUD actions for Listing model.
 */
class ListingController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Listing models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ListingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Listing model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Listing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Listing();
        
        if ($model->load(Yii::$app->request->post())){
            
            $model->imageFile =UploadedFile::getInstances($model, 'imageFile');
            echo "<pre>";
            print_r($model->imageFile);
            print_r(Yii::$app->request->post());echo "</pre>";
            
            if($model->save())
            {
                $fileupload=new Upload();
                $fileupload->list_id=$model->getPrimaryKey();
                foreach ($model->imageFile as $file) 
                {
                    $fileupload->file='upload/' . $file->baseName . '.' . $file->extension;
                    $file->saveAs('upload/' . $file->baseName . '.' . $file->extension);
                    $fileupload->save();
                }
                    return $this->redirect(['view', 'id' => $model->id]);
                   
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Listing model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->imgvalid='update';
        $images= \backend\models\Upload::find()->where(["list_id"=>$model->id])->asArray()->all();
        $model->imageFile=isset($images[0]) ? $images[0]['file'] : '';
       if ($model->load(Yii::$app->request->post()) && $model->save()){
        if(!empty($_FILES['Listing']['name']['imageFile']))
        {
           // echo "<pre>";print_r($_FILES['Listing']['name']['imageFile']);exit;
            $model->imageFile = UploadedFile::getInstances($model, 'imageFile');
               
                $count=1;
                foreach ($model->imageFile as $file) 
                {
                    if($count){
                        $connection = \Yii::$app->db;
                        $connection->createCommand()->delete('upload', 'list_id = '.$id)->execute();
                        $count=0;
                    }
                    $fileupload=new Upload();
                    $fileupload->list_id=$id;
                    $fileupload->file='upload/' . $file->baseName . '.' . $file->extension;
                    $fileupload->save();
                    $file->saveAs('upload/' . $file->baseName . '.' . $file->extension);
                }
        }
        if (1) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        
       }
        

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Listing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Listing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Listing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Listing::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
