<?php

use yii\helpers\Url;

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RubrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ABM Rubros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubros-index">

  <div class="card_title">
    <h1><?= Html::encode($this->title) ?></h1>
    <p class="padding_v">
      <?= Html::a('Crear Rubro', ['create'], ['class' => 'btn btn-default']) ?>
    </p>
  </div><br>





  <?php // echo $this->render('_search', ['model' => $searchModel]); 
  ?>
  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
      //  'idRubro',

      [ //#
        'class' => 'yii\grid\SerialColumn',
        'visible' => '1', // oculta esta columna 1 : visible   2: no visible
        'headerOptions' => ['class' => 'text-center', 'style' => 'width: 35px;',],
        'contentOptions' => ['class' => 'text-center', 'style' => 'width: 35px;',],
      ],

      [ // columnas Descripcion
        'class' => 'yii\grid\DataColumn',
        'visible' => '1', // oculta esta columna
        'attribute' => 'descripcion',
        'label' => 'Rubros',
        'headerOptions' => ['class' => 'text-left'],
        'contentOptions' => ['style' => 'width: 250px;', 'class' => 'text-left'],
      ],


      [ // columana donde están las acciones ver,actualizar, eliminar
        'class' => 'yii\grid\ActionColumn',
        'visible' => '1', // oculta esta columna
        'headerOptions' => ['class' => 'text-left'],
        'contentOptions' => ['style' => 'width: 25px;', 'class' => 'text-center'],
      ],


    ],
  ]); ?>


</div>