<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InscripcionesSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Lista de Postulantes';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="inscripciones-index">

<div class="busquedas-index">
  <div class="card_title">
    <h1><?= Html::encode($this->title) ?></h1>
  </div><br>
    <p>
        <?= "" //Html::a('Nuevo postulante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'idInscripcion',
          //  'idBusqueda',
          [
            'class' => 'yii\grid\DataColumn',
            'visible' => '1', // oculta esta columna
            'attribute' => 'fecha',
            'label' => 'Fecha alta',
            'format' => ['date', 'php: d-m-Y'] ,
            // 'filter'=>'',
            'headerOptions' => ['class' => 'text-left'],
            'contentOptions' => ['style' => 'width: 150px;', 'class' => 'text-left'],
          ],

            'apellido',
            'nombre',

        //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
