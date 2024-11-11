<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Facciones $model */

$this->title = Yii::t('app', 'Update Facciones: {name}', [
    'name' => $model->faccion_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Facciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->faccion_id, 'url' => ['view', 'faccion_id' => $model->faccion_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="facciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
