<?php

use app\models\Eventos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\EventosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Eventos');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="eventos-index container mt-4">

    <div class="banner">
        <h1 class="text-light font-weight-bold"><?= Html::encode($this->title) ?></h1>
    </div>

    <p class="text-center">
        <?= Html::a(Yii::t('app', 'Crear Eventos'), ['create'], ['class' => 'btn btn-lg btn-success shadow']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <div class="card shadow-lg mb-4">
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-hover table-bordered'],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'evento_id',
                        'headerOptions' => ['class' => 'bg-warning text-dark'],
                    ],
                    [
                        'attribute' => 'nombre_evento',
                        'headerOptions' => ['class' => 'bg-warning text-dark'],
                    ],
                    [
                        'attribute' => 'tipo_evento',
                        'headerOptions' => ['class' => 'bg-warning text-dark'],
                    ],
                    [
                        'attribute' => 'fecha_evento',
                        'headerOptions' => ['class' => 'bg-warning text-dark'],
                    ],
                    [
                        'attribute' => 'ubicacion',
                        'headerOptions' => ['class' => 'bg-warning text-dark'],
                    ],
                    [
                        'class' => ActionColumn::className(),
                        'headerOptions' => ['class' => 'bg-warning text-dark'],
                        'urlCreator' => function ($action, Eventos $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'evento_id' => $model->evento_id]);
                        },
                    ],
                ],
            ]); ?>
        </div>
    </div>

    <?php Pjax::end(); ?>

</div>

<style>
/* Fondo negro para toda la página */
body {
    background-color: #000;
}

/* Contenedor principal */
.eventos-index {
    font-family: Arial, sans-serif;
    background-color: #000; /* Fondo negro para el contenedor principal */
    border-radius: 10px;
    padding: 20px;
    margin-top: 30px;
    box-shadow: 0px 4px 15px rgba(255, 165, 0, 0.5); /* Sombra en tono naranja */
}

/* Banner del título */
.banner {
    background-image: url('https://www.wwe.com/f/styles/shows_header_xl/public/all/2024/08/20240816_Superstars_Header--08335ddce5bc971578fa2aa24bc0d571.jpg');
    background-size: cover;
    background-position: center;
    padding: 60px 0;
    text-align: center;
    border-radius: 10px;
}

.banner h1 {
    margin-bottom: 20px;
    color: #00bcd4;
    font-size: 3em;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

/* Estilo de la tarjeta que contiene la tabla */
.card {
    border-radius: 10px;
    background-color: #000; /* Fondo negro para la tarjeta */
    border: 2px solid #FFA500; /* Borde naranja */
}

/* Tabla */
.table {
    background-color: #000; /* Fondo negro para la tabla */
    border: 2px solid #FFA500; /* Borde naranja */
    border-radius: 10px;
    overflow: hidden;
}

/* Encabezados de la tabla */
.eventos-index .table thead th {
    font-weight: bold;
    text-align: center;
    color: black !important; /* Texto en negro, forzado */
    background-color: #FFD700; /* Fondo amarillo */
    padding: 15px;
    border: 1px solid #FFA500; /* Borde naranja entre encabezados */
}

/* Filas y celdas de la tabla */
.table tbody tr {
    background-color: #000; /* Fondo negro para las filas */
    transition: background-color 0.3s ease;
    border-bottom: 1px solid #FFA500; /* Línea naranja entre filas */
}

.table tbody tr:nth-child(even) {
    background-color: #000; /* Fondo negro para filas pares también */
}

.table tbody tr:hover {
    background-color: #222; /* Fondo oscuro para el hover */
}

/* Estilo del texto de las celdas */
.table td {
    color: #000; /* Texto negro para los registros */
    padding: 15px;
}

/* Botón de "Crear Eventos" */
.btn-success {
    background-color: #28a745;
    border-color: #28a745;
    font-size: 1.2em;
    padding: 10px 20px;
    box-shadow: 0px 4px 10px rgba(0, 150, 0, 0.5);
}

.btn-success:hover {
    background-color: #218838;
}

/* Breadcrumbs */
.breadcrumb {
    background-color: transparent;
    font-size: 1.1em;
    padding: 10px 0;
}

.breadcrumb a {
    color: #ffffff !important; /* Cambia a blanco */
    text-decoration: none;
}

.breadcrumb a:hover {
    color: #cccccc; /* Color gris claro al pasar el ratón */
}

.breadcrumb .breadcrumb-item {
    color: #ffffff; /* Cambia a blanco también */
}

.breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    color: #ffffff; /* Cambia a blanco también */
}

/* Estilo para la sección de resumen de la tabla */
.summary {
    color: #ffffff; /* Cambia a blanco */
    font-size: 1em; /* Ajusta el tamaño de fuente si es necesario */
}
</style>
