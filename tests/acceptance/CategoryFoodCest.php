<?php

class CategoryFoodCest
{
    public function FoodMenuIsVisible(AcceptanceTester $I)
    {
        # Перечень категорий
        $foodCategoty = array(
        'Салаты и холодные закуски',
        'Первые блюда',
        'Постные блюда',
        'Мучные блюда',
        'Комплексные обеды',
        'Посуда',
        'Меню',
        );

        # Преход на станицу с Личными данными
        $I->amOnPage('/corporate');
        
        # Проверка что в меню еды выволятся категории из массива
        for ($i=0; $i<count($foodCategoty); $i++) {
            $I->see($foodCategoty[$i], '.light_brown_grad_menu_vertical');
        }
    }
}
