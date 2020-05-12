<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;// agregada
use app\models\Busquedas;
use app\models\BusquedasSerach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Rubros;// agregada

/**
 * BusquedasController implements the CRUD actions for Busquedas model.
 */
class BusquedasController extends Controller
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
     * Lists all Busquedas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BusquedasSerach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

       //  creor un array asociativo para el select de Rubros en /views/busquedas/index
       // la clases ArrayHelper y Rubros hay que llamarla con "use"
        $array_rubros = ArrayHelper::map(Rubros::find()->asArray()->all(), 'idRubro', 'descripcion');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'array_rubros' => $array_rubros,

        ]);
    }

    /**
     * Displays a single Busquedas model.
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
     * Creates a new Busquedas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Busquedas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idBusqueda]);
        }

        // SE manda una array asociativo con los Rubros para luego usar en el formulario Create en el select rubros
        $array_rubros = ArrayHelper::map(Rubros::find()->asArray()->all(), 'idRubro', 'descripcion');
        
        return $this->render('create', ['model' => $model, 'array_rubros' => $array_rubros]);
    }

    /**
     * Updates an existing Busquedas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idBusqueda]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Busquedas model.
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
     * Finds the Busquedas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Busquedas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Busquedas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
