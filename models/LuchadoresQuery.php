<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Luchadores]].
 *
 * @see Luchadores
 */
class LuchadoresQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Luchadores[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Luchadores|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
