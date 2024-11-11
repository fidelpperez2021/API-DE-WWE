<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CombatesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="combates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'combate_id') ?>

    <?= $form->field($model, 'nombre_evento') ?>

    <?= $form->field($model, 'fecha_combate') ?>

    <?= $form->field($model, 'tipo_combate') ?>

    <?= $form->field($model, 'ganador_id') ?>

    <?php // echo $form->field($model, 'perdedor_id') ?>

    <?php // echo $form->field($model, 'estipulacion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
