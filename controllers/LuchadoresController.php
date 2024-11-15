<?php

namespace app\controllers;

use app\models\Luchadores;
use app\models\LuchadoresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LuchadoresController implements the CRUD actions for Luchadores model.
 */
class LuchadoresController extends Controller
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
     * Lists all Luchadores models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LuchadoresSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Luchadores model.
     * @param int $luchador_id Luchador ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($luchador_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($luchador_id),
        ]);
    }

    /**
     * Creates a new Luchadores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Luchadores();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'luchador_id' => $model->luchador_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Luchadores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $luchador_id Luchador ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($luchador_id)
    {
        $model = $this->findModel($luchador_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'luchador_id' => $model->luchador_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Luchadores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $luchador_id Luchador ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($luchador_id)
    {
        $this->findModel($luchador_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Luchadores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $luchador_id Luchador ID
     * @return Luchadores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($luchador_id)
    {
        if (($model = Luchadores::findOne(['luchador_id' => $luchador_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
