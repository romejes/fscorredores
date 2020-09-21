/**
 * Check if exists DOM element by selector
 * @param {string} selector
 */
export const existsElement = selector => {
  return document.querySelectorAll(selector).length > 0;
};

/*export const getBaseUrl = () => {
  return window.location.protocol + '//' + window.location.hostname;
};

export function disable(element) {
  element.setAttribute('disabled', true);
}

export function enable(element) {
  element.removeAttribute('disabled');
}

export const showValidationErrorsFromServer = messages => {
  for (const key in messages) {
    const spanMessage = $('<span></span>', {
      class: 'invalid-feedback',
      text: messages[key],
      style: 'display:inline',
    });

    $(`input[name=${key}]`)
      .closest('.form-group')
      .append(spanMessage);

    $(`input[name=${key}]`).addClass('is-invalid');
  }
};

export const existsElement = selector => {
  if (document.querySelectorAll(selector).length > 0) {
    console.log('si')
    return true;
  }
  return false;
};
*/
