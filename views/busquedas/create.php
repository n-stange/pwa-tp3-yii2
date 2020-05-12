<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Busquedas */

$this->title = 'Create Busquedas';
$this->params['breadcrumbs'][] = ['label' => 'Búsquedas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="busquedas-create">
    <div class="card_title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div><br>


    <?= $this->render('_form', ['model' => $model, 'array_rubros' => $array_rubros]) ?>

</div>