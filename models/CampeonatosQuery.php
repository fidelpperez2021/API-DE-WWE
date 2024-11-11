<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Campeonatos]].
 *
 * @see Campeonatos
 */
class CampeonatosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Campeonatos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Campeonatos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
