<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eventos".
 *
 * @property int $evento_id
 * @property string $nombre_evento
 * @property string|null $tipo_evento
 * @property string $fecha_evento
 * @property string|null $ubicacion
 * @property int|null $espectadores
 * @property string|null $descripcion
 */
class Eventos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eventos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_evento', 'fecha_evento'], 'required'],
            [['fecha_evento'], 'safe'],
            [['espectadores'], 'integer'],
            [['descripcion'], 'string'],
            [['nombre_evento', 'ubicacion'], 'string', 'max' => 100],
            [['tipo_evento'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'evento_id' => Yii::t('app', 'Evento ID'),
            'nombre_evento' => Yii::t('app', 'Nombre Evento'),
            'tipo_evento' => Yii::t('app', 'Tipo Evento'),
            'fecha_evento' => Yii::t('app', 'Fecha Evento'),
            'ubicacion' => Yii::t('app', 'Ubicacion'),
            'espectadores' => Yii::t('app', 'Espectadores'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return EventosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventosQuery(get_called_class());
    }
}
