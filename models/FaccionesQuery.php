<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Facciones]].
 *
 * @see Facciones
 */
class FaccionesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Facciones[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Facciones|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
