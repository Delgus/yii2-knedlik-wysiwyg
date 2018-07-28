Knedlik-wysiwyg
================
The extension for using  the Kendlik editor

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist delgus/yii2-knedlik-wysiwyg=dev-master
```

or add

```
"delgus/yii2-knedlik-wysiwyg": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by(properties 'name' and 'id' - required)  :

```php
<?= \delgus\knedlik\Knedlik::widget(
                [
                    'name' => 'knedlick',
                    'id' => 'knedlick',
                    'clientOptions' => [
                        'lang' => 'ru',
                        'outside' => ['bold', 'italic'],
                        'style' => 'flat',
                    ],
                ]
            ) ?>
```
            
In ActiveForm:
```php
 <?= $form->field($model, 'subject')->widget(\delgus\knedlik\Knedlik::class,['id' => 'knedlick']) ?>
```

For upload images:
- In view show property upload:
```php
 <?= \delgus\knedlik\Knedlik::widget(
                [
                    'name' => 'knedlick',
                    'id' => 'knedlick',
                    'clientOptions' => [
                       ...
                        'upload' => 'site/upload'
                        ...
                    ],
                ]
            ) ?>
```
- In Controller:
```php

    public function behaviors()
    {
        return [
           ...
            'knedlik' => [
                'class' => DisableCsrfBehavior::classname(),
                'actions' => ['upload'],
            ],
            ...
        ];
    }

    public function actions()
    {
        return [
           ...
            'upload' => [
                'class' => KnedlikAction::class,
                'uploadDir' => '/uploads'
            ],
            ...
        ];
    }
```

Thank you)
