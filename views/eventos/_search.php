<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EventosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="eventos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'evento_id') ?>

    <?= $form->field($model, 'nombre_evento') ?>

    <?= $form->field($model, 'tipo_evento') ?>

    <?= $form->field($model, 'fecha_evento') ?>

    <?= $form->field($model, 'ubicacion') ?>

    <?php // echo $form->field($model, 'espectadores') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
