<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Combates $model */

$this->title = Yii::t('app', 'Update Combates: {name}', [
    'name' => $model->combate_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Combates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->combate_id, 'url' => ['view', 'combate_id' => $model->combate_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="combates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
