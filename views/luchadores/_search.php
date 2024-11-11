<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\LuchadoresSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="luchadores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'luchador_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'nombre_ring') ?>

    <?= $form->field($model, 'fecha_debut') ?>

    <?= $form->field($model, 'fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'nacionalidad') ?>

    <?php // echo $form->field($model, 'altura_cm') ?>

    <?php // echo $form->field($model, 'peso_kg') ?>

    <?php // echo $form->field($model, 'movimiento_firma') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>