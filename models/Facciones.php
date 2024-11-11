<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facciones".
 *
 * @property int $faccion_id
 * @property string $nombre_faccion
 * @property int|null $lider_id
 * @property string|null $fecha_creacion
 * @property string|null $fecha_disolucion
 *
 * @property Luchadores $lider
 */
class Facciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'facciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_faccion'], 'required'],
            [['lider_id'], 'integer'],
            [['fecha_creacion', 'fecha_disolucion'], 'safe'],
            [['nombre_faccion'], 'string', 'max' => 100],
            [['lider_id'], 'exist', 'skipOnError' => true, 'targetClass' => Luchadores::class, 'targetAttribute' => ['lider_id' => 'luchador_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'faccion_id' => Yii::t('app', 'Faccion ID'),
            'nombre_faccion' => Yii::t('app', 'Nombre Faccion'),
            'lider_id' => Yii::t('app', 'Lider ID'),
            'fecha_creacion' => Yii::t('app', 'Fecha Creacion'),
            'fecha_disolucion' => Yii::t('app', 'Fecha Disolucion'),
        ];
    }

    /**
     * Gets query for [[Lider]].
     *
     * @return \yii\db\ActiveQuery|LuchadoresQuery
     */
    public function getLider()
    {
        return $this->hasOne(Luchadores::class, ['luchador_id' => 'lider_id']);
    }

    /**
     * {@inheritdoc}
     * @return FaccionesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FaccionesQuery(get_called_class());
    }
}
