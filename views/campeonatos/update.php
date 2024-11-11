<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Campeonatos $model */

$this->title = Yii::t('app', 'Update Campeonatos: {name}', [
    'name' => $model->titulo_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->titulo_id, 'url' => ['view', 'titulo_id' => $model->titulo_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="campeonatos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
