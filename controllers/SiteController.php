<?php

declare(strict_types=1);

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ];
    }

    public function onAuthSuccess($client)
    {
        $attributes = $client->getUserAttributes();
        // Обработка полученных данных

        // Поиск пользователя в базе данных с помощью полученных данных (например, email)
        $user = User::find()->where(['email' => $email])->one();

        if ($user) {
            // Если пользователь уже зарегистрирован, производится авторизация
            Yii::$app->user->login($user);
            $this->redirect(['site/index']);
        } else {
            // Если пользователя еще нет в базе данных, производится регистрация
            $password = Yii::$app->security->generateRandomString(12);
            $user = new User();
            $user->email = $email;
            $user->password = Yii::$app->security->generatePasswordHash($password);
            $user->save();

            Yii::$app->user->login($user);
            $this->redirect(['site/index']);
        }
    }
}