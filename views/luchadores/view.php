<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Luchadores $model */

$this->title = $model->luchador_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Luchadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="luchadores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'luchador_id' => $model->luchador_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'luchador_id' => $model->luchador_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'luchador_id',
            'nombre',
            'nombre_ring',
            'fecha_debut',
            'fecha_nacimiento',
            'nacionalidad',
            'altura_cm',
            'peso_kg',
            'movimiento_firma',
        ],
    ]) ?>

</div>