<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Luchadores $model */

$this->title = Yii::t('app', 'Create Luchadores');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Luchadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="luchadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>