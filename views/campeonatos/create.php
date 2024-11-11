<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Campeonatos $model */

$this->title = Yii::t('app', 'Create Campeonatos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campeonatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campeonatos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
