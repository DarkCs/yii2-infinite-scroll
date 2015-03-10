Yii2 Infinite Scroll
====================
LinkPager with infinite scroll support

Installation
------------

```
php composer.phar require --prefer-dist "darkcs/yii2-infinite-scroll" "*"
```

Options
-------
##### $autoStart `true`;
##### $containerSelector `.list-view`;
##### $itemSelector `.item`;
##### $paginationSelector `.pagination`;
##### $nextSelector `.pagination .next a:first`;
##### $bufferPx `40`;
##### $pjaxContainer `null`;

Usage example
-------------

```php
$pjax = \yii\widgets\Pjax::begin();

echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'options' => [
        'class' => '.list-view',
    ],
    'itemView' => '_item',
    'summary' => false,
    'layout' => '{items}<div class="pagination-wrap">{pager}</div>',
    'pager' => [
        'class' => \darkcs\infinitescroll\InfiniteScrollPager::className(),
        'paginationSelector' => '.pagination-wrap',
        'pjaxContainer' => $pjax->id,
    ],
]);
\yii\widgets\Pjax::end();
```

JS usage
--------

```javascript
// init
$('.list-view').infinitescroll();
// enable, paused by default
$('.list-view').infinitescroll('start');
// disable
$('.list-view').infinitescroll('stop');
```
