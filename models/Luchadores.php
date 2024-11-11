<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "luchadores".
 *
 * @property int $luchador_id
 * @property string $nombre
 * @property string|null $nombre_ring
 * @property string|null $fecha_debut
 * @property string|null $fecha_nacimiento
 * @property string|null $nacionalidad
 * @property int|null $altura_cm
 * @property int|null $peso_kg
 * @property string|null $movimiento_firma
 *
 * @property Combates[] $combates
 * @property Combates[] $combates0
 * @property Facciones[] $facciones
 */
class Luchadores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'luchadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['fecha_debut', 'fecha_nacimiento'], 'safe'],
            [['altura_cm', 'peso_kg'], 'integer'],
            [['nombre', 'nombre_ring', 'movimiento_firma'], 'string', 'max' => 100],
            [['nacionalidad'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'luchador_id' => Yii::t('app', 'Luchador ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'nombre_ring' => Yii::t('app', 'Nombre Ring'),
            'fecha_debut' => Yii::t('app', 'Fecha Debut'),
            'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
            'nacionalidad' => Yii::t('app', 'Nacionalidad'),
            'altura_cm' => Yii::t('app', 'Altura Cm'),
            'peso_kg' => Yii::t('app', 'Peso Kg'),
            'movimiento_firma' => Yii::t('app', 'Movimiento Firma'),
        ];
    }

    /**
     * Gets query for [[Combates]].
     *
     * @return \yii\db\ActiveQuery|CombatesQuery
     */
    public function getCombates()
    {
        return $this->hasMany(Combates::class, ['ganador_id' => 'luchador_id']);
    }

    /**
     * Gets query for [[Combates0]].
     *
     * @return \yii\db\ActiveQuery|CombatesQuery
     */
    public function getCombates0()
    {
        return $this->hasMany(Combates::class, ['perdedor_id' => 'luchador_id']);
    }

    /**
     * Gets query for [[Facciones]].
     *
     * @return \yii\db\ActiveQuery|FaccionesQuery
     */
    public function getFacciones()
    {
        return $this->hasMany(Facciones::class, ['lider_id' => 'luchador_id']);
    }

    /**
     * {@inheritdoc}
     * @return LuchadoresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LuchadoresQuery(get_called_class());
    }
}
