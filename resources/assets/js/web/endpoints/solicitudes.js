import { existsElement } from '../../shared/util';

import {
  createMaskDate,
  initCustomFile,
  processAfiliacionSeguroEstudianteForm,
  processComprarSoatForm,
  processCotizarSeguroVehiculoTodoRiesgo,
  processCotizarSoatForm,
  toggleDireccionField,
  toggleFechaVencimiento,
} from '../functions/forms';

import {
  addValidationRulesForComprarSoatForm,
  setValidationAfiliacionSeguroEstudianteForm,
  setValidationComprarSoatForm,
  setValidationCotizarSeguroVehiculoTodoRiesgoForm,
  setValidationCotizarSoatForm,
  isValid
} from '../functions/validation';

import {
  setStepsOnWizardSoatCompra,
  setWizard,
  toggleWizardProcessButton,
} from '../functions/wizard';

if (existsElement('.wizard')) {
  //  Set wizard component
  setWizard();
}

if (existsElement('input[type="file"]')) {
  //  Set custom file input component
  initCustomFile();
}

if (existsElement('#wizard-seguro-estudiante')) {
  //  Toggle button on wizard
  toggleWizardProcessButton(0);
}

if (existsElement('#wizard-cotizar-seguro-vehicular-todo-riesgo')) {
  //  Toggle button on wizard
  toggleWizardProcessButton(1);
}

if (existsElement('#wizard-cotizar-soat')) {
  //  Toggle button on wizard
  toggleWizardProcessButton(1);
}

if (existsElement('#wizard-comprar-soat')) {
  $('#wizard-comprar-soat').smartWizard('setOptions', {
    hiddenSteps: [2, 3, 4],
  });
}

if (existsElement('#frm-afiliacion-seguro-estudiante')) {
  //  Valid and process form
  setValidationAfiliacionSeguroEstudianteForm();
  document
    .getElementById('btn-enviar-solicitud')
    .addEventListener('click', () => {
      if (
        isValid(document.getElementById('frm-afiliacion-seguro-estudiante'))
      ) {
        processAfiliacionSeguroEstudianteForm();
      }
    });
}

if (existsElement('#frm-cotizar-seguro-vehicular-todo-riesgo')) {
  //  Valid and process form
  setValidationCotizarSeguroVehiculoTodoRiesgoForm();

  document
    .getElementById('btn-enviar-solicitud')
    .addEventListener('click', () => processCotizarSeguroVehiculoTodoRiesgo());
}

if (existsElement('#frm-cotizar-soat')) {
  setValidationCotizarSoatForm();

  document
    .getElementById('rad-tengo-soat')
    .addEventListener('click', () => toggleFechaVencimiento());

  document
    .getElementById('rad-no-tengo-soat')
    .addEventListener('click', () => toggleFechaVencimiento());

  document
    .getElementById('btn-enviar-solicitud')
    .addEventListener('click', () => processCotizarSoatForm());
}

if (existsElement('#frm-comprar-soat')) {
  setValidationComprarSoatForm();

  document
    .getElementById('btn-enviar-solicitud')
    .addEventListener('click', () => processComprarSoatForm());
}

if (existsElement('#txt-fecha-nacimiento')) {
  //  Set a mask date on input
  const minDate = new Date(1970, 0, 1);
  const maxDate = new Date(new Date().getFullYear() - 18, 0, 1);
  createMaskDate('txt-fecha-nacimiento', minDate, maxDate);
}

if (existsElement('#txt-fecha-vencimiento')) {
  //  Set a mask date on input
  const minDate = new Date();
  const maxDate = new Date(new Date().getFullYear() + 10, 11, 31);
  createMaskDate('txt-fecha-vencimiento', minDate, maxDate);
}

if (existsElement('input[name=tipo_compra]')) {
  const optionsTipoCompra = document.getElementsByName('tipo_compra');

  optionsTipoCompra.forEach(element => {
    element.addEventListener('click', ev => {
      setStepsOnWizardSoatCompra(ev.target.value);
      toggleDireccionField(ev.target.value);
      addValidationRulesForComprarSoatForm(ev.target.value);
    });
  });
}
