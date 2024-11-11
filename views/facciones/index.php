<?php

use app\models\Facciones;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\FaccionesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Facciones');
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facciones - WWE Network</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./estilos/Index.css" rel="stylesheet">
    <style>
    /* Estilos personalizados */
    body {
        font-family: Arial, sans-serif;
        background-color: #000000;
        color: #fff;
    }
    header {
        background-color: #1d1f21;
        color: #fff;
        text-align: center;
        padding: 2rem 0;
    }
    .btn-success {
        background-color: #28a745;
        border: none;
    }
    .facciones-index h1 {
        text-align: center;
        color: #fff;
    }
    .breadcrumb {
        background-color: #444;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        color: #fff;
    }
    footer {
        background-color: #1d1f21;
        color: #fff;
        text-align: center;
        padding: 1rem;
        margin-top: auto;
    }
    /* Estilos personalizados para GridView */
    .grid-view {
        background-color: #222;
        border-radius: 5px;
        padding: 20px;
        border: 2px solid #ff5733;
    }
    .grid-view th {
        background-color: #ff5733;
        color: #fff;
        text-align: center;
        border: 2px solid #ffcc00;
    }
    .grid-view th a {
        color: #fff;
    }
    .grid-view td {
        background-color: #444;
        color: #fff;
        text-align: center;
        border: 2px solid #ffcc00;
    }
    .grid-view tr:hover {
        background-color: #555;
    }
    .grid-view .pagination {
        justify-content: center;
    }
    /* Estilos para la galería */
    .gallery-container {
        margin-top: 40px;
    }
    .gallery-item {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    .gallery-item:hover {
        transform: scale(1.05);
    }
    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
    }
    .gallery-caption {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        text-align: center;
        padding: 0.5rem;
        font-size: 1.2rem;
    }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Encabezado -->
    <header>
        <h1>WWE NETWORK</h1>
        <p>Explora luchadores, eventos y más</p>
        <img src="https://www.wwe.com/f/styles/shows_header_xl/public/all/2024/08/20240816_Superstars_Header--08335ddce5bc971578fa2aa24bc0d571.jpg" alt="Banner WWE" class="img-fluid">
    </header>

    <!-- Contenido Principal -->
    <div class="container mt-4 flex-grow-1">
        <div class="facciones-index">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a(Yii::t('app', 'Crear Facción'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'options' => [
                    'class' => 'grid-view',
                ],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'faccion_id',
                    'nombre_faccion',
                    'lider_id',
                    'fecha_creacion',
                    'fecha_disolucion',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Facciones $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'faccion_id' => $model->faccion_id]);
                        }
                    ],
                ],
            ]); ?>
        </div>

    </div>

    <!-- Pie de página -->
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

