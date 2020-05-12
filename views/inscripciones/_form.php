<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inscripciones-form" >

<?php $form = ActiveForm::begin();

if(isset($_REQUEST['idBusqueda'])){
echo $form->field($model, 'idBusqueda')->textInput(['readonly' => true, 'value' => $_REQUEST['idBusqueda'] ]) ;

}else{
  echo $form->field($model, 'idBusqueda')->Input('hidden')->label(false);
}
?>



    <?= $form->field($model, 'fecha')->Input('date') ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => ' btn btn-primary','style' => 'width:100%;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
