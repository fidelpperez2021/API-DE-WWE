<?php

use app\models\Luchadores;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\LuchadoresSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Luchadores');
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API de la WWE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            background-color: #050505;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
            background: linear-gradient(135deg, #ff004c, #ff8a00);
            color: #fff;
            padding: 3rem 0;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(255, 136, 0, 0.5);
        }
        header h1 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #fff;
        }
        header p {
            font-style: italic;
            color: #ffdd57;
        }

        /* Container Styling */
        .container {
            background: rgba(0, 0, 0, 0.9);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 6px 12px rgba(255, 0, 76, 0.5);
        }

        /* Gallery Styles */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }
        .gallery img {
            width: 140px;
            height: 140px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(255, 0, 76, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.15);
            box-shadow: 0 8px 20px rgba(255, 136, 0, 0.6);
        }

        /* Table Styles */
        .table-container {
            margin-top: 2.5rem;
            padding: 1rem;
            border-radius: 8px;
            background: #222;
            box-shadow: 0 5px 10px rgba(255, 0, 76, 0.5);
        }
        .table-dark th, .table-dark td {
            border: 1px solid #444;
            color: #ffdd57;
            vertical-align: middle;
        }
        .table-dark thead th {
            background-color: #ff004c;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
        }
        .table-dark tbody tr:hover {
            background-color: rgba(255, 136, 0, 0.2);
            cursor: pointer;
        }
        .btn {
            margin: 0.7rem 0;
        }

        /* Footer */
        footer {
            background-color: #111;
            color: #ffdd57;
            text-align: center;
            padding: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>WWE NETWORK</h1>
        <p>Explora luchadores, eventos y más</p>
        <img src="https://www.wwe.com/f/styles/shows_header_xl/public/all/2024/08/20240816_Superstars_Header--08335ddce5bc971578fa2aa24bc0d571.jpg" alt="Banner WWE" class="img-fluid rounded" style="box-shadow: 0 8px 16px rgba(0,0,0,0.4);">
    </header>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Luchadores Section -->
        <section class="table-container">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <p class="text-center"><?= Html::a(Yii::t('app', 'Create Luchadores'), ['create'], ['class' => 'btn btn-success']) ?></p>
            
            <?php Pjax::begin(); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'options' => ['class' => 'table-responsive'],
                'tableOptions' => ['class' => 'table table-dark table-striped table-hover'],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'luchador_id',
                    'nombre',
                    'nombre_ring',
                    'fecha_debut',
                    'fecha_nacimiento',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Luchadores $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'luchador_id' => $model->luchador_id]);
                        }
                    ],
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </section>

        <!-- Gallery Section -->
        <section class="gallery">
            <?php 
            $images = [
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/09/CODY_04262024gd_0100_headSawp_(1)--9614b63ab3bbb8c9bedcfac02908b9d0.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/08/Gunther_08052024ca_101_Profile--ac53196411c301f5a868ece9e7d59888.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/06/LIV_05132024ca_023_Title_Profile--530195974e3839e08bdb34e41adbaed5.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/08/NiaJax_01292024RF_07806_Title_Profile--621b2b17e78c2f4944014deac37482b9.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/08/BronBreaker_03192024br_6806_fake_title_Profile--d63d621c6beacca23902a2193dbe78a4.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/08/LAKnight_01282024RF_1997_Tittle_Profile--49a0d7de79fccbca4b63ea3e75bebc08.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/06/Andrade_Profile--0cb03d3b12027640984153bf96b896d6.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/10/Candice_10112024MM_4291_Profile--82ccdecd6315daa3686a4828d56601ba.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/03/CENA_06272022sb_0026_updatedGear_Profile--11d6f1726dbfb1f137b72b7df3847535.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/04/Roman_PROFILE--a693aaf95d89f652dd64e3f5deb115e9.png",
                "https://www.wwe.com/f/styles/wwe_1_1_540__composite/public/all/2021/09/Drew_Mcintyre_Profile--aca391095fe74e721e098cadc93571d3.png",
                "https://www.wwe.com/f/styles/wwe_1_1_540__composite/public/all/2024/05/Jey-Uso_01292024RF_10011_Profile--02473cd8c088818b51e67ebf4a5f7949.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/03/jimmy_uso_PROFILE--197929cb5dedeeccbed95cfb9ed27f44.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/04/Seth-Rollins_01282024RF_04450_Profile--a5d406bf9b4431355cb37805c9c9ebbe.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/06/Rey_mysterio_PROFILE--17640312f46a0901903cf7164289c9cf.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2023/10/Carlito_PROFILE--4aa466892d0fdd170f52825d9ed5f66d.png",
                 "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2022/05/Alexa_Bliss_Profile--185973455ed41cf1d692a71e9d124eee.png",
                "https://www.wwe.com/f/styles/talent_champion_xl/public/all/2024/03/Randy_Orton_11272023rf_071_Profile--9f48e983c9e721c0a5659fc639f1c14a.png"
            ];
            foreach ($images as $image) {
                echo '<img src="'.$image.'" alt="WWE Superstar">';
            }
            ?>
        </section>
    </div>

    <!-- Footer -->
</body>
</html>
