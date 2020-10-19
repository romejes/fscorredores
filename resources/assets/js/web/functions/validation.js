import 'jquery-validation';
import 'jquery-validation/dist/localization/messages_es_PE';
import 'jquery-validation/dist/additional-methods';

import { resizeTabContainer } from './wizard';
import { regexDate } from './rules';

/**
 * Set default configuration for jQuery Validation Plugin
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 */
export function setDefaultSettings() {
  $.validator.setDefaults({
    lang: 'es',
    errorElement: 'span',
    errorPlacement: (error, element) => {
      setErrorPlacement(error, element);
      resizeTabContainer();
    },
    highlight: (element, errorClass, validClass) => {
      highlightElement(element);
      //resizeTabContainer();
    },
    unhighlight: (element, errorClass, validClass) => {
      unhighlightElement(element);
      //resizeTabContainer();
    },
  });
}

/**
 * Set how error messages will be placed on form
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 * @param {HTMLElement} error
 * @param {JQuery<HTMLElement>} element
 */
export function setErrorPlacement(error, element) {
  const controlTag = element.prop('tagName').toLowerCase();

  //  Set validation message according tag and type (if is an input element)
  if (controlTag === 'input' && element.attr('type') === 'radio') {
    element
      .closest('[class^="col-"]')
      .eq(0)
      .append(error);
  } else if (controlTag === 'input' && element.attr('type') === 'file') {
    element
      .closest('.form-group')
      .eq(0)
      .append(error);
  } else {
    element.parent().append(error);
  }
  
  //  Add class for message
  error.addClass('invalid-feedback');
}

/**
 * Set how invalid element must be highlight
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 * @param {JQuery<HTMLElement>} element
 * @returns {void}
 */
export function highlightElement(element) {
  const controlTag = $(element)
    .prop('tagName')
    .toLowerCase();
  let targetIsInvalidClassElement = $(element);

  if (controlTag === 'input' && $(element).attr('type') === 'radio') {
    const elementNameAttribute = $(element).attr('name');
    targetIsInvalidClassElement = $(
      `input[name=${elementNameAttribute}]`,
    ).closest('.form-check');
  }

  if (controlTag === 'input' && $(element).attr('type') === 'file') {
    targetIsInvalidClassElement = $(element).closest('.custom-file');
  }

  targetIsInvalidClassElement.addClass('is-invalid');

  //  Resize tab pane
  /*const tabPane = element.closest('.tab-pane');
  resizeTabContainer(tabPane);*/
}

/**
 * Set how element was invalid must be unhighlight
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 * @param {JQuery<HTMLElement>} element
 * @returns {boolean|void}
 */
export function unhighlightElement(element) {
  const controlTag = $(element)
    .prop('tagName')
    .toLowerCase();
  let targetIsInvalidClassElement = $(element);

  if (controlTag === 'input' && $(element).attr('type') === 'radio') {
    const elementNameAttribute = $(element).attr('name');
    targetIsInvalidClassElement = $(
      `input[name=${elementNameAttribute}]`,
    ).closest('.form-check');
  }

  if (controlTag === 'input' && $(element).attr('type') === 'file') {
    targetIsInvalidClassElement = $(element).closest('.custom-file');
  }

  targetIsInvalidClassElement.removeClass('is-invalid');

  /*const tabPane = $(element).closest('.tab-pane');
  resizeTabContainer(tabPane);*/
}

/**
 * Return if control is valid or not
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 * @param {HTMLElement} element
 * @returns {boolean}
 */
export function isValid(element) {
  return $(element).valid();
}

/**
 * Add or remove validation rules for "fecha vencimiento" field
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @param {boolean} [addRules=true]
 */
export function toggleFechaVencimientoRules(addRules = true) {
  if (addRules) {
    $('#txt-fecha-vencimiento').rules(
      'add',
      {
        required: true,
        pattern: regexDate(),
      },
      {
        pattern: 'No es una fecha válida',
      },
    );
  } else {
    $('#txt-fecha-vencimiento').rules('remove');
  }
}

/**
 * Validation settings for contact form
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 */
export function setValidationContactForm() {
  $('#frm-contacto').validate();
}

/**
 * Validation settings for "Afiliacion de Seguro Estudiantil" form
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function setValidationAfiliacionSeguroEstudianteForm() {
  $('#frm-afiliacion-seguro-estudiante').validate({
    rules: {
      nombres: {
        required: true,
        maxlength: 40,
      },
      apellido_paterno: {
        required: true,
        maxlength: 40,
      },
      apellido_materno: {
        required: false,
        maxlength: 40,
      },
      sexo: {
        required: true,
      },
      pais: {
        required: true,
      },
      tipo_documento_identidad: {
        required: true,
      },
      numero_documento_identidad: {
        required: true,
        maxlength: 15,
        digits: true,
      },
      estado_civil: {
        required: true,
      },
      fecha_nacimiento: {
        pattern: regexDate(),
      },
      correo: {
        required: true,
        email: true,
        maxlength: 40,
      },
      telefono: {
        required: true,
      },
      voucher: {
        required: true,
        extension: 'pdf|jpeg|jpg|gif|bmp|png',
      },
    },
    messages: {
      fecha_nacimiento: 'No es una fecha válida',
    },
  });
}

/**
 * Validation settings for "Cotizar Seguro Vehicular Todo Riesgo" form
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function setValidationCotizarSeguroVehiculoTodoRiesgoForm() {
  $('#frm-cotizar-seguro-vehicular-todo-riesgo').validate({
    rules: {
      nombres: {
        required: true,
        maxlength: 40,
      },
      apellido_paterno: {
        required: true,
        maxlength: 40,
      },
      apellido_materno: {
        required: false,
        maxlength: 40,
      },
      tipo_documento_identidad: {
        required: true,
      },
      numero_documento_identidad: {
        required: true,
        maxlength: 15,
        digits: true,
      },
      correo: {
        required: true,
        email: true,
        maxlength: 40,
      },
      telefono: {
        required: true,
      },
      anio_vehiculo: {
        required: true,
      },
      placa: {
        required: true,
        maxlength: 15,
      },
      uso: {
        required: true,
      },
      asientos: {
        required: true,
        min: 1,
      },
      clase_vehiculo: {
        required: true,
      },
      marca: {
        required: true,
      },
      modelo: {
        required: true,
      },
      costo: {
        required: true,
        number: true,
      },
      compania_seguro: {
        required: true,
      },
    },
  });
}

/**
 * Validation settings for "Cotizar SOAT" form
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function setValidationCotizarSoatForm() {
  $('#frm-cotizar-soat').validate({
    nombres: {
      required: true,
      maxlength: 40,
    },
    apellido_paterno: {
      required: true,
      maxlength: 40,
    },
    apellido_materno: {
      required: false,
      maxlength: 40,
    },
    tipo_documento_identidad: {
      required: true,
    },
    numero_documento_identidad: {
      required: true,
      maxlength: 15,
      digits: true,
    },
    correo: {
      required: true,
      email: true,
      maxlength: 40,
    },
    telefono: {
      required: true,
    },
    anio_vehiculo: {
      required: true,
    },
    placa: {
      required: true,
      maxlength: 15,
    },
    uso: {
      required: true,
    },
    asientos: {
      required: true,
      min: 1,
    },
    compania_seguro: {
      required: true,
    },
    tiene_soat: {
      required: true,
    },
  });
}

/**
 * Validation settings for "Comprar SOAT" form
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function setValidationComprarSoatForm(tipoCompra) {
  $('#frm-comprar-soat').validate({
    rules: {
      tipo_compra: {
        required: true,
      },
      nombres: {
        required: true,
        maxlength: 40,
      },
      apellido_paterno: {
        required: true,
        maxlength: 40,
      },
      apellido_materno: {
        required: false,
        maxlength: 40,
      },
      tipo_documento_identidad: {
        required: true,
      },
      numero_documento_identidad: {
        required: true,
        maxlength: 15,
        digits: true,
      },
      fecha_nacimiento: {
        required: true,
        pattern: regexDate(),
      },
      correo: {
        required: true,
        email: true,
        maxlength: 40,
      },
      telefono: {
        required: true,
      },
    },
    messages: {
      fecha_nacimiento: {
        pattern: 'No es una fecha válida',
      },
    },
  });
}

/**
 * Add and remove some validation rules according "tipoCompra" value
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @param {string} tipoCompra
 */
export function addValidationRulesForComprarSoatForm(tipoCompra) {
  if (tipoCompra === 'adquisicion') {
    $('#txt-direccion').rules('add', {
      required: true,
      maxlength: 100,
    });

    $('#fil-imagen-poliza').rules('add', {
      required: true,
      extension: 'png|bmp|gif|jpg|pdf',
    });

    $('#ddo-anio-vehiculo').rules('add', 'required');

    $('#txt-placa').rules('add', {
      required: true,
      maxlength: 15,
    });

    $('#txt-uso').rules('add', 'required');

    $('#txt-asientos').rules('add', {
      required: true,
      min: 1,
    });

    $('[name=compania_seguro]').rules('add', 'required');

    $('#fil-tarjeta-propiedad').rules('add', {
      required: true,
      extension: 'png|bmp|gif|jpg|pdf',
    });

    $('#fil-dni').rules('add', {
      required: true,
      extension: 'png|bmp|gif|jpg|pdf',
    });
  }

  if (tipoCompra === 'renovacion') {
    $('#txt-direccion').rules('remove');
    $('#fil-imagen-poliza').rules('remove');
    $('#ddo-anio-vehiculo').rules('remove');
    $('#txt-placa').rules('remove');
    $('#txt-uso').rules('remove');
    $('#txt-asientos').rules('remove');
    $('[name=compania_seguro]').rules('remove');
    $('#fil-tarjeta-propiedad').rules('remove');
    $('#fil-dni').rules('remove');
  }
}

/**
 * Show server validation errors
 *
 * @author Jesus Romero
 * @date 12/10/2020
 * @export
 * @param {Array<string>} messages
 */
export function showServerErrors(messages) {
  $('span.invalid-feedback').remove();
  let firstElementInvalid;

  for (const property in messages) {
    const element = $(`[name=${property}]`).eq(0);
    const spanError = $('<span></span>', {
      text: messages[property][0],
    });

    if (typeof firstElementInvalid === 'undefined') {
      firstElementInvalid = element;
    }

    unhighlightElement(element);
    highlightElement(element);
    setErrorPlacement(spanError, element);
  }

  $('.wizard').smartWizard(
    'goToStep',
    firstElementInvalid.closest('.tab-pane').index(),
  );
}
