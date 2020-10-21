import { existsElement } from '../../shared/util';
import { toggleSidenav, attachMenuContent } from '../functions/menu';

import AOS from 'aos';
import { sticky } from '../functions/sticky';
import { initCarouselHome } from '../functions/carousel';

if (existsElement('#btn-menu')) {
  //  Toggles sidenav bar
  document
    .getElementById('btn-menu')
    .addEventListener('click', () => toggleSidenav());

  //  Set location of menu links
  window.addEventListener('load', () => attachMenuContent());
  window.addEventListener('resize', () => attachMenuContent());
}

if (existsElement('.carousel')) {
  initCarouselHome();
}

//  Init animations
AOS.init();

//  Init sticky header
window.onscroll = () => {
  sticky();
};
