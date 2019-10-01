Yii2 inkscape wrapper
=====================
Yii2 inkscape wrapper

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vladayson/yii2-inkscape "*"
```

or add

```
"vladayson/yii2-inkscape": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, add it in your config file:

```
/config/web.php
```

Add inkscape component
```
'components' => [
        ...
        'inkscape' => [
            'class' => vladayson\Inkscape\Inkscape::class,
        ],
        ...
]
```

And use it

```php
<?php Yii::$app->inkscape->format('<path_to_svg>/.svg', '<path_to_png>/.png', 'png') ?>```