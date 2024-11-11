<?php

namespace app\commands;

use yii\console\Controller;
use app\models\luchadores;

class MostrarRegistrosCommand extends Controller
{
    public function actionIndex()
    {
        $registros = luchadores::find()->all(); // Obtén todos los registros de la tabla

        foreach ($registros as $registro) {
            print_r($registro->attributes); // Muestra cada registro en la terminal
        }
    }
}
