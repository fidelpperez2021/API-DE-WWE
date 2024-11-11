<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Combates $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="combates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_evento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_combate')->textInput() ?>

    <?= $form->field($model, 'tipo_combate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ganador_id')->textInput() ?>

    <?= $form->field($model, 'perdedor_id')->textInput() ?>

    <?= $form->field($model, 'estipulacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
