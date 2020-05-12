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

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'idInscripcion',
          //  'idBusqueda',
            'fecha',
            'apellido',
            'nombre',

        //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
