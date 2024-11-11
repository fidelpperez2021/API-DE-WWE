<?php

namespace app\controllers;

use app\models\Facciones;
use app\models\FaccionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FaccionesController implements the CRUD actions for Facciones model.
 */
class FaccionesController extends Controller
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
     * Lists all Facciones models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FaccionesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Facciones model.
     * @param int $faccion_id Faccion ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($faccion_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($faccion_id),
        ]);
    }

    /**
     * Creates a new Facciones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Facciones();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'faccion_id' => $model->faccion_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Facciones model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $faccion_id Faccion ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($faccion_id)
    {
        $model = $this->findModel($faccion_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'faccion_id' => $model->faccion_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Facciones model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $faccion_id Faccion ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($faccion_id)
    {
        $this->findModel($faccion_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Facciones model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $faccion_id Faccion ID
     * @return Facciones the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($faccion_id)
    {
        if (($model = Facciones::findOne(['faccion_id' => $faccion_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
