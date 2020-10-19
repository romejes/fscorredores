import { init } from '../functions/map';
import { existsElement } from '../../shared/util';
import {
  isValid,
  setDefaultSettings,
  setValidationContactForm,
} from '../functions/validation';
import { processContactForm } from '../functions/forms';

//  Load map on website
if (existsElement('#location-map')) {
  init('location-map', -18.018382982450568, -70.25518439834747);
}

if (existsElement('form')) {
  setDefaultSettings();
}

if (existsElement('#frm-contact')) {
  //  Apply validation rules to form
  setValidationContactForm();

  //  Process form
  document.getElementById('btn-send').addEventListener('click', () => {
    if (isValid('#frm-contact')) {
      processContactForm();
    }
  });
}
