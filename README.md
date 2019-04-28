# simple-content-builder
Simple content builder.

This is not intended to be a profound feature. Just some POC code for [an integrations project](https://github.com/ryaan-anthony/magento-dev).

- - - 

* Install the module

```
composer install
```

* Run the tests

```
composer test
```

* How to use

``` 
$model = new RyaanAnthony\ContentBuilder\HtmlModel;

$viewModel = new RyaanAnthony\ContentBuilder\HtmlViewModel($model);

$viewModel->getHtml();
```

- - -
Tested using PHP7.2
