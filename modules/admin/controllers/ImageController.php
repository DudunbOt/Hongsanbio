<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\image\Images;
use app\modules\admin\models\image\ImageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ImageController implements the CRUD actions for Images model.
 */
class ImageController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Images models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ImageSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Images model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Images model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
     public function actionCreate()
     {
         $model = new Images();

         if ($this->request->isPost) {
             if ($model->load($this->request->post())) {
                 $upload = UploadedFile::getInstance($model, 'image');
                 $name_file = rand();
                 if (!empty($upload)) {
                     $upload->saveAs('uploads/' . $name_file . '.' . $upload->extension);
                     $model->image = $name_file . '.' . $upload->extension;
                 }
                 $model->save();
                 return $this->redirect(['/admin/image/index']);
             }
         } else {
             $model->loadDefaultValues();
         }

         return $this->render('create', [
             'model' => $model,
         ]);
     }

     /**
      * Updates an existing News model.
      * If update is successful, the browser will be redirected to the 'view' page.
      * @param int $id ID
      * @return string|\yii\web\Response
      * @throws NotFoundHttpException if the model cannot be found
      */
     public function actionUpdate($id)
     {
         $model = $this->findModel($id);
         $gambar_lama = $model->image;

         if ($this->request->isPost && $model->load($this->request->post())) {
             if ($model->image == null) {
                 $model->image = $gambar_lama;
             }
             $upload = UploadedFile::getInstance($model, 'image');
             $name_file = rand();
             if (!empty($upload)) {
                 $upload->saveAs('uploads/' . $name_file . '.' . $upload->extension);
                 $model->image = $name_file . '.' . $upload->extension;
             }
             $model->save();
             return $this->redirect(['/admin/image/index']);
         }
         return $this->render('update', [
             'model' => $model,
         ]);
     }

    /**
     * Deletes an existing Images model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['/admin/image/index']);
    }

    /**
     * Finds the Images model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Images the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Images::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
