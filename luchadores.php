<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class TuTabla extends ActiveRecord
{
    public static function tableName()
    {
        return 'luchadores'; // Nombre de la tabla en la base de datos
    }
}
