<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 20/06/2015
 * Time: 11:33 PM
 */

namespace test\models;


use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return 1;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return 1;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

}