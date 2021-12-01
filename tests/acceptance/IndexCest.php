<?php

class IndexCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $login = "pasha1249";
        $password = '123123123';
        $I->login($login, $password);
        # Авторизация
        
        $I->amOnPage('/lk/?action=person');
        # Преход на станицу с Личными данными
        
        $name = $I->grabValueFrom('input[name=name]');
        # Забираем ФИО пользователя
        $I->amOnPage('/lk');

        $I->see($name . ', здравствуйте!','');
        $I->see('Спасибо, что пришли к нам снова!');
        # Проверяем что приветствие выводится с правильным ФИО

    }
}
