Yii2 Infinite Scroll
====================
LinkPager with infinite scroll support

Installation
------------

```
php composer.phar require --prefer-dist "apexwire/yii2-infinite-scroll" "*"
```

Options
-------
##### $autoStart `true`; - 
##### $containerSelector `.list-view`;
##### $itemSelector `.item`;
##### $paginationSelector `.pagination`;
##### $nextSelector `.pagination .next a:first`;
##### $bufferPx `40`;
##### $pjaxContainer `null`;
##### $alwaysHidePagination = `true`;
##### $container = `['window']`; `window` - loading content on main scrollbar approaching document bottom, `container` - loading content on container scrollbar approaching container bottom, 

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
        'class' => \apexwire\infinitescroll\InfiniteScrollPager::className(),
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

Events
------
```javascript
$('.list-view').on('infinitescroll:afterRetrieve', function(){
    console.log('infinitescroll:afterRetrieve');
});

$('.list-view').on('infinitescroll:afterStart', function(){
    console.log('infinitescroll:afterStart');
});

$('.list-view').on('infinitescroll:afterStop', function(){
    console.log('infinitescroll:afterStop');
});
```
