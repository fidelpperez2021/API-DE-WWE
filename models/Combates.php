<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "combates".
 *
 * @property int $combate_id
 * @property string $nombre_evento
 * @property string|null $fecha_combate
 * @property string|null $tipo_combate
 * @property int|null $ganador_id
 * @property int|null $perdedor_id
 * @property string|null $estipulacion
 *
 * @property Luchadores $ganador
 * @property Luchadores $perdedor
 */
class Combates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'combates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_evento'], 'required'],
            [['fecha_combate'], 'safe'],
            [['ganador_id', 'perdedor_id'], 'integer'],
            [['nombre_evento', 'estipulacion'], 'string', 'max' => 100],
            [['tipo_combate'], 'string', 'max' => 50],
            [['ganador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Luchadores::class, 'targetAttribute' => ['ganador_id' => 'luchador_id']],
            [['perdedor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Luchadores::class, 'targetAttribute' => ['perdedor_id' => 'luchador_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'combate_id' => Yii::t('app', 'Combate ID'),
            'nombre_evento' => Yii::t('app', 'Nombre Evento'),
            'fecha_combate' => Yii::t('app', 'Fecha Combate'),
            'tipo_combate' => Yii::t('app', 'Tipo Combate'),
            'ganador_id' => Yii::t('app', 'Ganador ID'),
            'perdedor_id' => Yii::t('app', 'Perdedor ID'),
            'estipulacion' => Yii::t('app', 'Estipulacion'),
        ];
    }

    /**
     * Gets query for [[Ganador]].
     *
     * @return \yii\db\ActiveQuery|LuchadoresQuery
     */
    public function getGanador()
    {
        return $this->hasOne(Luchadores::class, ['luchador_id' => 'ganador_id']);
    }

    /**
     * Gets query for [[Perdedor]].
     *
     * @return \yii\db\ActiveQuery|LuchadoresQuery
     */
    public function getPerdedor()
    {
        return $this->hasOne(Luchadores::class, ['luchador_id' => 'perdedor_id']);
    }

    /**
     * {@inheritdoc}
     * @return CombatesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CombatesQuery(get_called_class());
    }
}
