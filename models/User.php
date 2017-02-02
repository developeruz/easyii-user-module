<?php

namespace developeruz\easyii_user\models;

use dektrium\user\models\User as BaseUser;

class User extends BaseUser
{
    public function isRoot()
    {
      return in_array($this->username, \Yii::$app->params['admins']);
    }
}
