<?php



use yii\helpers\Html;

$this->title = 'Búsqueda Empleos';
?>
<div class="site-index">

    <div class="jumbotron card image1">
        <h1 class="title">BÚSQUEDA DE EMPLEOS</h1>

        <p class="lead">Mini App con YII2 - TP #3</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6 padding_v">
                <div class="card">
                    <h2 class="title">Rubros ABM</h2>
                    <hr>
                    <p>Alta, baja y Modificación de rubros para la búsqueda de empleos.</p>
                    <p> </p>
                    <div class="">
                        <?= Html::a('Ingresar', ['/rubros'], ['class' => 'btn btn-default width_100']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 padding_v">
                <div class="card">
                    <h2 class="title">Búsquedas</h2>
                    <hr>
                    <p>Listado completo y búsqueda por filtro de los puestos disponibles.</p>
                    <p class="">
                        <?= Html::a('Ingresar', ['/busquedas'], ['class' => 'btn btn-default width_100']) ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>