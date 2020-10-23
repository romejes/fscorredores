import { existsElement } from '../../shared/util';
import { attachMenuContent, toggleSidenav, toggleSubmenu } from '../functions/menu';

import AOS from 'aos';
import { sticky } from '../functions/sticky';
import { initCarouselHome } from '../functions/carousel';

//  Toggles sidenav bar
document
  .getElementById('btn-menu')
  .addEventListener('click', () => toggleSidenav());

document
  .getElementById('btn-close-menu')
  .addEventListener('click', () => toggleSidenav());

window.addEventListener('load', () => {
  //  Set location of menu links
  attachMenuContent();
  eventToggleSubmenu();
});

window.addEventListener('resize', () => {
  //  Set location of menu links
  attachMenuContent();
  eventToggleSubmenu();
});

window.onscroll = () => {
  //  Init sticky header
  sticky();
};

document.addEventListener('readystatechange', () => {
  //  Init animations
  AOS.init();

  //  Init carousel
  if (existsElement('.carousel')) {
    initCarouselHome();
  }
});

function eventToggleSubmenu() {
  const links = document.querySelectorAll(' li.navbar-link.has-children');

  if (window.innerWidth < 992) {
    for (let i = 0; i < links.length; i++) {
      links[i].removeEventListener('click', toggleSubmenu);
      links[i].addEventListener('click', toggleSubmenu);
    }
  } else {
    for (let i = 0; i < links.length; i++) {
      links[i].removeEventListener('click', toggleSubmenu);
    }
  }
}
