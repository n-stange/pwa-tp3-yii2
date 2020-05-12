<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */

//$this->title = $model->idInscripcion;
$this->params['breadcrumbs'][] = ['label' => 'Busquedas', 'url' => ['/busquedas/index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inscripciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idInscripcion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idInscripcion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idInscripcion',
            'idBusqueda',

            [
                'attribute' => 'Empresa',
                'value' => $model->busqueda->empresa,
            ],
            [
                'attribute' => 'Titulo',
                'value' => $model->busqueda->titulo,
            ],
            [
                'attribute' => 'Descripción',
                'value' => $model->busqueda->descripcion,
            ],
            'fecha',
            'apellido',
            'nombre',
        ],
    ]) ?>

</div>