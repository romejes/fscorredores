/**
 * Functions related to menu and sidenav bar
 * 
 * @author Jesus Romero
 * @date 28/09/2020
 * 
 * ============================================
 * 
 */


/**
 * Show or hide sidenav bar when window horizontal size is small or less than 992px
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 */
export function toggleSidenav() {
  isSidenavShown() ? hideSidenav() : showSidenav();
}

/**
 * Shows sidenav bar
 *
 * @author Jesus Romero
 * @date 28/09/2020
 */
function showSidenav() {
  $('.sidenav').addClass('open');
  $('.wrapper').addClass('is-menu-open');
  $('.wrapper .overlay').addClass('active');

  //  When sidenav is shown, replaces icon on button menu
  $('#btn-menu i')
    .removeClass('fa-bars')
    .addClass('fa-times');
}

/**
 * Hides sidenav bar
 *
 * @author Jesus Romero
 * @date 28/09/2020
 */
function hideSidenav() {
  $('.sidenav').removeClass('open');
  $('.wrapper').removeClass('is-menu-open');
  $('.wrapper .overlay').removeClass('active');

  //  When sidenav is hidden, replaces icon on button menu
  $('#btn-menu i')
    .removeClass('fa-times')
    .addClass('fa-bars');
}

/**
 * Check if sidenav bar is shown or not
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @returns {boolean}
 */
function isSidenavShown() {
  return $('.sidenav').hasClass('open');
}

/**
 * Detach menu content and attach to another position:
 * - On small screens (width less than 992 px), menu content is attached on sidenav bar
 * - On large screens (width more than 992 px), menu content is attached to header position
 *
 * @author Jesus Romero
 * @date 28/09/2020
 */
export function attachMenuContent() {
  const menu = $('.menu-content').detach();

  if ($(window).outerWidth() >= 992) {
    $('nav.navbar').append(menu);
  } else {
    $('.sidenav').append(menu);
  }

  //  Hide sidenav if it is opened during resize event
  if (isSidenavShown()) {
    hideSidenav();
  }
}
