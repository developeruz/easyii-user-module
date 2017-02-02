<?php
namespace developeruz\easyii_user\controllers;

use Yii;
use dektrium\user\models\LoginForm;
use yii\easyii\controllers\SignController as BaseSignController;

class SignController extends BaseSignController
{
    public function actionIn()
    {
        $model = \Yii::createObject(LoginForm::className());

        if (!Yii::$app->user->isGuest || ($model->load(Yii::$app->request->post()) && $model->login())) {
            return $this->redirect(Yii::$app->user->getReturnUrl(['/admin']));
        } else {
            $this->module = Yii::$app->modules['user'];
            return $this->render('@vendor/dektrium/yii2-user/views/security/login', [
                'model' => $model,
            ]);
        }
    }
}
