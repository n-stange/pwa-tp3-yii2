<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rubros */

$this->title = 'Create Rubros';
$this->params['breadcrumbs'][] = ['label' => 'Rubros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubros-create">
<div class="card_title">
<h1><?= Html::encode($this->title) ?></h1>
</div><br>
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
