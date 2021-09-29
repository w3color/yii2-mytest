Первое тестовое расширение
==========================
Описание тестового расширения

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist w3color/yii2-mytest "*"
```

or add

```
"w3color/yii2-mytest": "*"
```

to the require section of your `composer.json` file.


Миграция
-----

Выполнить миграцию для создания нужной таблицы в базе данных (консоль):
```
yii migrate --migrationPath=@w3color/mytest/migrations --interactive=0
```
Добавить тестовые денные


Просмотр
-----

Перейти на страницу:
```
index.php?r=mytest/test/index
```
