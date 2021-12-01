<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    public function login($name, $password)
    # Авторизация пользователя
    {
        $I = $this;
        $I->amOnPage('/lk');
        $I->fillField(['name' => 'login'], 'pasha1249');
        $I->fillField(['name' => 'passwd'], '123123123');
        $I->click('input[type=submit]');
    }


}
