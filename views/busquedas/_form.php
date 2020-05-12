<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\controllers\BusquedasControllers ;

/* @var $this yii\web\View */
/* @var $model app\models\Busquedas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="busquedas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=  $form->field($model, 'idRubro')->dropDownList($array_rubros, ['prompt' => 'Seleccione Uno' ])->label('Rubro')  ?>

    <?= $form->field($model, 'empresa')
        ->textInput(['maxlength' => true])
        ->textInput()
        ->hint('escriba el nombre de la empresa')
        ->label('Empresa') ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Crear', ['class' => 'btn btn-primary width_100']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
