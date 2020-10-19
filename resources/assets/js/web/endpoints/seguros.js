import { existsElement } from '../../shared/util';

if (existsElement('#sel-insurances')) {
  document
    .getElementById('sel-insurances')
    .addEventListener('change', event => {
      const chosenOption = event.target.options[event.target.selectedIndex];
      event.target.setAttribute('disabled', 'disabled');

      window.location.href = chosenOption.getAttribute('data-href');
    });
}
