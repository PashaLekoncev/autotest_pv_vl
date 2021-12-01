<?php

class UserGreetingCest
{
    public function tryToTestUserGreeting(AcceptanceTester $I)
    {
        # Авторизация пользователя
        $login = "pasha1249";
        $password = '123123123';
        $I->login($login, $password);
        
        # Преход на станицу "Личные данные"
        $I->amOnPage('/lk/?action=person');
        
        # Получает текущее ФИО пользователя
        $name = $I->grabValueFrom('input[name=name]');
        $I->amOnPage('/lk');

        # Проверяем что приветствие выводится с правильным ФИО
        $I->see($name . ', здравствуйте!');
        $I->see('Спасибо, что пришли к нам снова!');
    }
}
