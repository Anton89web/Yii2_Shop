<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[comics]].
 *
 * @see comics
 */
class comicsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return comics[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return comics|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
