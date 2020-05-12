<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rubros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rubros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary width_100']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
