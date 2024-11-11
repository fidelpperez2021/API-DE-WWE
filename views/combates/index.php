<?php

use app\models\Combates;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\CombatesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Combates');
$this->params['breadcrumbs'][] = $this->title;
?>
<header class="bg-dark text-white text-center py-4">
    <h1>WWE NETWORK</h1>
    <p>Explora luchadores, eventos y más</p>
    <img src="https://www.wwe.com/f/styles/shows_header_xl/public/all/2024/08/20240816_Superstars_Header--08335ddce5bc971578fa2aa24bc0d571.jpg" alt="Banner WWE" class="img-fluid" loading="lazy">
</header>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>API de la WWE</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

    /* Estilo del título de la página */
    h1 {
        color: #ffffff; /* Cambia a blanco */
    }

    /* Tabla */
    .table {
        background-color: #000; /* Fondo negro para la tabla */
        border: 2px solid #FFA500; /* Borde naranja */
        border-radius: 10px;
        overflow: hidden;
    }

    /* Encabezados de la tabla */
    .table thead th {
        font-weight: bold;
        text-align: center;
        color: black; /* Texto en negro */
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

    .table tbody tr:hover {
        background-color: #222; /* Fondo oscuro para el hover */
    }

    /* Estilo del texto de las celdas */
    .table td {
        color: #fff; /* Texto blanco para los registros */
        padding: 15px;
    }

    /* Botón de "Crear Combates" */
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

<div class="combates-index eventos-index"> <!-- Clase para aplicar el estilo -->

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Combates'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'table-responsive'], // Asegura que la tabla sea responsiva
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'combate_id',
            'nombre_evento',
            'fecha_combate',
            'tipo_combate',
            'ganador_id',
            //'perdedor_id',
            //'estipulacion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Combates $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'combate_id' => $model->combate_id]);
                }
            ],
        ],
        'tableOptions' => ['class' => 'table table-striped table-bordered table-dark'], // Aplica estilos de Bootstrap
    ]); ?>

    <?php Pjax::end(); ?>

</div>
