<?php



use yii\helpers\Url;

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BusquedasSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Búsquedas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="busquedas-index">
  <div class="card_title">
    <h1><?= Html::encode($this->title) ?></h1>
    <p class="padding_v">
      <?= Html::a('Nueva Búsqueda', ['create'], ['class' => 'btn btn-default']) ?>
    </p>
  </div><br>



  <?php //echo $this->render('_search', ['model' => $searchModel]); 
  ?>

  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel, /// permite filtrar por columna
    'columns' => [
      ['class' => 'yii\grid\SerialColumn'],

      [
        'class' => 'yii\grid\DataColumn',
        'visible' => '0', // oculta esta columna
        'attribute' => 'idBusqueda',
        'label' => 'Búsquedas',
        // 'filter'=>'',
        'headerOptions' => ['class' => 'text-left'],
        'contentOptions' => ['style' => 'width: 150px;', 'class' => 'text-left'],
      ],

      [
        'class' => 'yii\grid\DataColumn',
        'visible' => '1', // oculta esta columna
        'attribute' => 'idRubro',
        'label' => 'Rubros',
        'filter' => $array_rubros,
        'format' => 'raw',
        'value' => function ($searchModel) {
          $url = Url::to(['/inscripciones/create', 'idBusqueda' => $searchModel->idBusqueda]); // your url code to retrieve the profile view
          $atributos = ['class' => 'profile-link  btn btn-primary']; // any HTML attributes for your link
          return Html::a('Postularme',  $url, $atributos);
        },
        'headerOptions' => ['class' => 'text-left'],
        'contentOptions' => ['style' => 'width: 150px;', 'class' => 'text-left'], // ancho de la columna aliniación del texto
      ],

      [ // columna Empresa
        'class' => 'yii\grid\DataColumn',
        'visible' => '1', // 0 oculta esta columna
        'attribute' => 'empresa',
        'label' => 'Empresa',
        'headerOptions' => ['class' => 'text-left'],
        'contentOptions' => ['style' => 'width:auto;', 'class' => 'text-left'], // ancho de la columna aliniación del texto
      ],


      'titulo',
      'descripcion',

      [
        'class' => 'yii\grid\DataColumn',
        'visible' => '1', // oculta esta columna
        'attribute' => '',
        'label' => '',
        'filter' => $array_rubros,
        'format' => 'raw',
        'value' => function ($searchModel) {
          $url = Url::to(['/inscripciones', 'idBusqueda' => $searchModel->idBusqueda]); // your url code to retrieve the profile view
          $atributos = ['class' => 'profile-link  btn btn-info']; // any HTML attributes for your link
          return Html::a('Ver postulantes',  $url, $atributos);
        },
        'headerOptions' => ['class' => 'text-left'],
        'contentOptions' => ['style' => 'width: 150px;', 'class' => 'text-left'],
      ],


      /*  [
             'class' => 'yii\grid\ActionColumn',
              'contentOptions' => ['style' => 'width: 100px;', 'class' => 'text-center'],
            ],*/
    ],
  ]);




  ?>
</div>