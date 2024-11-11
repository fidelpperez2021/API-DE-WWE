<?php

namespace app\controllers;

use app\models\Combates;
use app\models\CombatesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CombatesController implements the CRUD actions for Combates model.
 */
class CombatesController extends Controller
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
     * Lists all Combates models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CombatesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Combates model.
     * @param int $combate_id Combate ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($combate_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($combate_id),
        ]);
    }

    /**
     * Creates a new Combates model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Combates();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'combate_id' => $model->combate_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Combates model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $combate_id Combate ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($combate_id)
    {
        $model = $this->findModel($combate_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'combate_id' => $model->combate_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Combates model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $combate_id Combate ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($combate_id)
    {
        $this->findModel($combate_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Combates model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $combate_id Combate ID
     * @return Combates the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($combate_id)
    {
        if (($model = Combates::findOne(['combate_id' => $combate_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
