jQuery( document ).ready( function() {
  var $slider = jQuery('.slider-price').slick({
dots: true,
arrows: false,
infinite: false,
slidesToShow: 1,
centerMode: true,
initialSlide: 1, // Start from the second item
});

$slider.find( '.slick-slide' ).on( 'click', function() {
  var index = $( this ).data( 'slick-index' );

  $slider.slick( 'slickGoTo', index );
} );
} );

function toggleContent(tabId) {
    const content = document.getElementById(tabId);
    const isVisible = content.style.display === 'block';
    // Скрыть все другие вкладки
    const allContents = document.querySelectorAll('.tab-content');
    allContents.forEach(item => {
        item.style.display = 'none';
    });
    // Показать/скрыть текущую вкладку
    content.style.display = isVisible ? 'none' : 'block';
}

