import 'owl.carousel';

/**
 * Init carousel component on Home page
 *
 * @author Jesus Romero
 * @date 20/10/2020
 * @export
 */
export function initCarouselHome() {
  $('.carousel').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    dots: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: true,
    dotsClass: 'carousel-dots',
    dotClass: 'carousel-dot',
    onInitialize: () => {
      loadImages();
    },
    onInitialized: () => {
      setTimeout(() => {
        $('.owl-item.active .carousel-text-animated').addClass(
          'is-transitioned',
        );
      }, 200);
    },
    onResize: () => {
      loadImages();
    },
    onChanged: ev => {
      $('.carousel-text-animated').removeClass('is-transitioned');
      const currentSlide = $('.carousel-slide').eq(ev.item.index);
      currentSlide.find('.carousel-text-animated').addClass('is-transitioned');
    },
  });
}

/**
 * Load images according to window size screen
 *
 * @author Jesus Romero
 * @date 20/10/2020
 * @export
 */
function loadImages() {
  const items = document.querySelectorAll('.carousel-slide');

  items.forEach(slide => {
    let urlBackground;
    if ($(window).width() >= 768) {
      urlBackground = `url(${slide.dataset.mdImg})`;
    } else {
      urlBackground = `url(${slide.dataset.img})`;
    }

    slide.style.backgroundImage = urlBackground;
  });
}
