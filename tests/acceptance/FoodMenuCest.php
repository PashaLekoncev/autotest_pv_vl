<?php

class FoodMenuCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $foodCategoty = array(
        'Салаты и холодные закуски',
        'Первые блюда',
        'Постные блюда',
        'Мучные блюда',
        'Комплексные обеды',
        'Посуда',
        'Меню',
        );

        $I->amOnPage('/corporate');
        # Преход на станицу с Личными данными

        for ($i=0; $i<count($foodCategoty); $i++) {
            $I->see($foodCategoty[$i], '.light_brown_grad_menu_vertical');
        }
        # Проверка что в меню еды выволятся нужные категории
    }
}
