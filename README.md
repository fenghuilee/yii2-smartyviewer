Smarty Extension for Yii 2
==========================

This extension provides a `ViewRender` that would allow you to use Smarty view template engine.

To use this extension, simply add the following code in your application configuration and web controller:

```php
xxx/config/main.php
return [
    //....
    'components' => [
        'smarty' => [
            'class' => 'yii\smartyviewer\SmartyViewer',
            //'themeName' => 'basic',
            //'cachePath' => '@runtime/Smarty/cache',
            //'options' => [
            //    'left_delimiter' => '<{',
            //    'right_delimiter' => '}>',
            //],
        ],
    ],
];

XxxxController.php
    public function init()
    {
        Yii::$app->smarty->init();
        parent::init();
        //other code
    }
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist fenghuilee/yii2-smartyviewer "*"
```

or add

```json
"fenghuilee/yii2-smartyviewer": "*"
```

to the require section of your composer.json.

Note that the smarty composer package is distributed using subversion so you may need to install subversion.
