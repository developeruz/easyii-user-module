User module for EasyiiCMS
=========================

This module allows add [User module](http://github.com/dektrium/yii2-user) to [Easy yii2 cms](http://github.com/noumo/easyii) 

## Installation guide
```bash
$ php composer.phar require developeruz/easyii-user-module "*"
```

Replace last line in `app/config/web.php`
```php
return array_merge_recursive($config, require($webroot . '/vendor/noumo/easyii/config/easyii.php'));
```
with 
```php
$config = array_merge_recursive($config,
    require($webroot . '/vendor/developeruz/easyii-user-module/config/user_module_config.php'),
    require($webroot . '/vendor/noumo/easyii/config/easyii.php'));
$config['components']['user'] = [ 'identityClass' => 'developeruz\easyii_user\models\User' ];
return $config;
```

#### If you don't have installed User module before
Run 
```php 
php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations
```

Register and confirm at least one user (you can do it via [console command](https://github.com/dektrium/yii2-user/blob/master/docs/console.md)) 

#### Activate module 
Add to `app/config/params.php` list of admin users for the User module 
```php 
'admins' => ['admin']
 ```
Note: only users with username mentioned in the list above would have access to the User Module.

Run migrations
```php 
php yii migrate/up --migrationPath=@vendor/developeruz/easyii-user-module/migrations
```

And login to EasyiiCMS admin panel with the user from the User module.

License
=======

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
