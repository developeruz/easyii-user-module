<?php

use yii\db\Migration;

class m170202_073527_insert_user_module_to_easy_cms extends Migration
{
    public function up()
    {
        $this->insert('easyii_modules', [
            'name' => 'user',
            'class' => 'developeruz\easyii_user\UserModule',
            'title' => 'Users',
            'icon' => 'user',
            'status' => 1,
            'settings' => '[]',
            'notice' => 0,
            'order_num' => 100
        ]);
    }

    public function down()
    {
        return $this->delete('easyii_modules', ['name' => 'user']);
    }
}
