# Необходимое установка ПО:

 - composer
 - npm


# Уcтановка зависимостей:

 - composer install
 - npm install

# Запуск selenium-server-standalone сервера:

 - .\node_modules\.bin\webdriver-manager update
 - .\node_modules\.bin\webdriver-manager start

# Запуск приемочных тестов:

 - .\vendor\bin\codecept.bat run  acceptance -vvv
