<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Combates $model */

$this->title = Yii::t('app', 'Create Combates');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Combates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
