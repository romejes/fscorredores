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
  $('.wrapper-shadow').addClass('active');
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
  $('.wrapper-shadow').removeClass('active');
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
  const menu = $('.navbar-links-container').detach();

  if ($(window).outerWidth() >= 992) {
    $('nav.navbar').append(menu);
  } else {
    $('.sidenav').append(menu);
  }

  //  Hide sidenav if it is opened during resize event
  if (isSidenavShown()) {
    hideSidenav();

    document.querySelectorAll('.sidenav .navbar-link.has-children').forEach(link => {
      const submenu = link.getElementsByClassName('navbar-submenu')[0];
      const icon = link.getElementsByTagName('i')[0];
      closeSubmenu(submenu, icon);
    });
  }
}

/**
 * Open or hide submenu on small screens
 *
 * @author Jesus Romero
 * @date 21/10/2020
 * @export
 * @param {HTMLElement} link
 */
export function toggleSubmenu(ev) {
  const submenu = ev.target.nextElementSibling;
  const elementIconSubmenu = ev.target.getElementsByTagName('i')[0];

  if (submenu.style.height) {
    closeSubmenu(submenu, elementIconSubmenu);
  } else {
    openSubmenu(submenu, elementIconSubmenu);
  }
}

/**
 *
 *
 * @author Jesus Romero
 * @date 22/10/2020
 * @export
 * @param {*} submenu
 * @param {*} icon
 */
export function closeSubmenu(submenu, icon) {
  if (icon.classList.contains('fa-angle-up')) {
    icon.classList.remove('fa-angle-up');
    icon.classList.add('fa-angle-down');
  }

  submenu.style.height = null;
}

/**
 *
 *
 * @author Jesus Romero
 * @date 22/10/2020
 * @export
 * @param {HTMLElement} submenu
 * @param {HTMLElement} icon
 */
export function openSubmenu(submenu, icon) {
  if (icon.classList.contains('fa-angle-down')) {
    icon.classList.remove('fa-angle-down');
    icon.classList.add('fa-angle-up');
  }

  submenu.style.height = submenu.scrollHeight + 'px';
}
