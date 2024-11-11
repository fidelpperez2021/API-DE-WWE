<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Facciones $model */

$this->title = Yii::t('app', 'Create Facciones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Facciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
