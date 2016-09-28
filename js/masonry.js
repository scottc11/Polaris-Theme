
var $container = $('.masonry-container');
$container.imagesLoaded( function () {
  $container.masonry({
    columnWidth: '.grid-item',
    itemSelector: '.grid-item'
  });
});
