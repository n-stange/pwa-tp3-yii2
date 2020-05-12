<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Busquedas */

$this->title = 'Update Busquedas: ' . $model->idBusqueda;
$this->params['breadcrumbs'][] = ['label' => 'Busquedas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBusqueda, 'url' => ['view', 'id' => $model->idBusqueda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="busquedas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [  'model' => $model,   'array_rubros' => $array_rubros   ]) ?>

</div>
