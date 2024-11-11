<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campeonatos".
 *
 * @property int $titulo_id
 * @property string $nombre_titulo
 * @property string|null $fecha_creacion
 * @property int|null $estado_activo
 * @property string|null $descripcion
 */
class Campeonatos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campeonatos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_titulo'], 'required'],
            [['fecha_creacion'], 'safe'],
            [['estado_activo'], 'integer'],
            [['descripcion'], 'string'],
            [['nombre_titulo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'titulo_id' => Yii::t('app', 'Titulo ID'),
            'nombre_titulo' => Yii::t('app', 'Nombre Titulo'),
            'fecha_creacion' => Yii::t('app', 'Fecha Creacion'),
            'estado_activo' => Yii::t('app', 'Estado Activo'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return CampeonatosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CampeonatosQuery(get_called_class());
    }
}
