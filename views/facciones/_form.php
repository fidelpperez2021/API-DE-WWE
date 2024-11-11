<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Facciones $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="facciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_faccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lider_id')->textInput() ?>

    <?= $form->field($model, 'fecha_creacion')->textInput() ?>

    <?= $form->field($model, 'fecha_disolucion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
