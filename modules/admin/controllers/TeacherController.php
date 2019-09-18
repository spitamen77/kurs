<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\dilshod\Teacher;
use app\models\dilshod\TeacherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TeacherController implements the CRUD actions for Teacher model.
 */
class TeacherController extends Controller
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
     * Lists all Teacher models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeacherSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Teacher model.
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
     * Creates a new Teacher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Teacher();

        if ($model->load(Yii::$app->request->post())) {
            function rasm($model,$qiymat){
                $file = UploadedFile::getInstance($model, $qiymat);
                if (isset($file))
                {
                    $filename = uniqid() . '.' . $file->extension;
                    $path = 'uploads/teacher';
                    if (!file_exists($path)) {
                        mkdir($path,0777,true);
                    }
                    $path = 'uploads/teacher/' . $filename;
                    if ($file->saveAs($path))
                        {
                            return $path;
                        }
                }
            }
            $model->photo = rasm($model, 'photo');
            if ($model->save()) return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Teacher model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = clone $model;

        if ($model->load(Yii::$app->request->post())) {
            function qayta($model,$rasm, $model2){
                $file = UploadedFile::getInstance($model, $rasm);
                if ($model2->photo==null || $file!=null) {
                    if (isset($file))
                    {
                        $filename = uniqid() . '.' . $file->extension;
                        $path = 'uploads/teacher/' . $filename;
                        $path2 = 'uploads/teacher/' . $model2->photo;
                        
                        if (is_file($path2)) {
                // print_r($path2); die;
                            @unlink($path2);
                        }
                        if ($file->saveAs($path))
                        {
                            return $path;
                        }
                    }
                    else return $model2->photo;
                }
                else return $model2->photo;
            }
            $model->photo = qayta($model, 'photo', $model2);
            if ($model->save()) return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Teacher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        @unlink($model->photo); 
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Teacher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Teacher the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Teacher::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
