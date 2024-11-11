<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Luchadores $model */

$this->title = Yii::t('app', 'Update Luchadores: {name}', [
    'name' => $model->luchador_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Luchadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->luchador_id, 'url' => ['view', 'luchador_id' => $model->luchador_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="luchadores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>