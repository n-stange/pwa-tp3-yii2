<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inscripciones */

$this->title = 'Nuevo postulante';
$this->params['breadcrumbs'][] = ['label' => 'Inscripciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inscripciones-create">
<div class="card_title">
    <h1><?= Html::encode($this->title) ?></h1>
  </div><br>

    <?= $this->render('_form', ['model' => $model ]) ?>

</div>
