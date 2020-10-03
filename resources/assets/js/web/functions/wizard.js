import 'smartwizard';

import { isValid } from './validation';

/**
 * Set common settings to apply for wizard
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 */
export function setWizard() {
  $('.wizard').smartWizard({
    lang: {
      previous: 'Anterior',
      next: 'Siguiente',
    },
    anchorSettings: {
      markAllPreviousStepsAsDone: false,
    },
    selected: 0,
    toolbarSettings: {
      toolbarExtraButtons: [
        $('<button></button>', {
          text: 'Enviar solicitud',
          class: 'btn btn-primary',
          id: 'btn-enviar-solicitud',
          type: 'button',
          disabled: true,
        }),
      ],
    },
  });

  $('.wizard').smartWizard('reset');

  $('.wizard').on(
    'leaveStep',
    (e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) => {
      if (!validStep(currentStepIndex) && stepDirection === 'forward') {
        const tabPane = document.getElementsByClassName('tab-pane')[
          currentStepIndex
        ];
        resizeTabContainer(tabPane);
        return false;
      }
    },
  );

  document
    .querySelectorAll('form input, form select, form textarea')[0]
    .focus();
}

/**
 * Check if controls of an step have a valid state
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @param {number} stepIndex
 * @returns {boolean}
 */
function validStep(stepIndex) {
  const tab = $('.tab-pane').eq(stepIndex);
  const controls = tab.find('input, select, textarea');
  let invalidControls = 0;

  controls.each((index, control) => {
    if (!isValid(control)) {
      invalidControls++;
    }
  });
  return invalidControls > 0 ? false : true;
}

/**
 * Change height of tab container according to height of current tab pane
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 * @param {HTMLElement} tabPane
 */
export function resizeTabContainer(tabPane) {
  const heightTabPane = $(tabPane).height();
  $('.tab-content')
    .eq(0)
    .height(heightTabPane);
}

/**
 * Enable process button when final step is reached
 * Otherwise, button becomes disable
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @param {number} currentStepIndex
 */
export function toggleWizardProcessButton(currentStepIndex) {
  $('.wizard').on('showStep', (e, anchorObject, stepIndex, stepDirection) => {
    if (stepDirection === 'forward' && stepIndex === currentStepIndex) {
      $('#btn-enviar-solicitud').removeAttr('disabled');
    } else {
      $('#btn-enviar-solicitud').attr('disabled', 'disabled');
    }
  });
}

/**
 * Delete all data on inputs and returns to first step of wizard
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function resetWizard() {
  const formOnWizard = document.querySelector('.wizard form');
  formOnWizard.reset();
  $('.wizard').smartWizard('reset');
}

/**
 * Show or hide steps according option selected on first step of "Compra SOAT" wizard
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @param {string} tipoCompra
 */
export function setStepsOnWizardSoatCompra(tipoCompra) {
  if (tipoCompra === 'adquisicion') {
    $('#wizard-comprar-soat').smartWizard('stepState', [2, 4], 'show');
    $('#wizard-comprar-soat').smartWizard('stepState', [3], 'hide');
    toggleWizardProcessButton(2);
  }

  if (tipoCompra === 'renovacion') {
    $('#wizard-comprar-soat').smartWizard('stepState', [2, 4], 'hide');
    $('#wizard-comprar-soat').smartWizard('stepState', [3], 'show');
    toggleWizardProcessButton(1);
  }
}
