<?php

namespace app\controllers;

use app\models\Campeonatos;
use app\models\CampeonatosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CampeonatosController implements the CRUD actions for Campeonatos model.
 */
class CampeonatosController extends Controller
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
     * Lists all Campeonatos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CampeonatosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Campeonatos model.
     * @param int $titulo_id Titulo ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($titulo_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($titulo_id),
        ]);
    }

    /**
     * Creates a new Campeonatos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Campeonatos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'titulo_id' => $model->titulo_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Campeonatos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $titulo_id Titulo ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($titulo_id)
    {
        $model = $this->findModel($titulo_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'titulo_id' => $model->titulo_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Campeonatos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $titulo_id Titulo ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($titulo_id)
    {
        $this->findModel($titulo_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Campeonatos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $titulo_id Titulo ID
     * @return Campeonatos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($titulo_id)
    {
        if (($model = Campeonatos::findOne(['titulo_id' => $titulo_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
