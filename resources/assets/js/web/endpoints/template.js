import { existsElement } from '../../shared/util';
import { toggleSidenav, attachMenuContent } from '../functions/menu';

import Splide from '@splidejs/splide';

import AOS from 'aos';
import { sticky } from '../functions/sticky';

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
  document.addEventListener('DOMContentLoaded', () => {
    new Splide('.carousel', {
      cover: true,
      type: 'loop',
      pauseOnHover: false,
      fixedHeight: 400,
      autoplay: true,
      arrows: false,
      height: 450,
      breakpoints: {
        768: {
          height: 600,
        },
      },
    }).mount();
  });
}

//  Init animations
AOS.init();

//  Init sticky header
window.onscroll = () => {
  sticky();
};
