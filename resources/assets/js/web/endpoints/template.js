import { existsElement } from '../../shared/util';
import { toggleSidenav, attachMenuContent } from '../functions/menu';

import Glide from '@glidejs/glide';
import AOS from 'aos';

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
  new Glide('.carousel', {
    autoplay: 4000,
    type: 'carousel',
  }).mount();
}

AOS.init();
