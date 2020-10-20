import axios from 'axios';
import swal from 'sweetalert2';
import IMask from 'imask';
import moment from 'moment';
import bsCustomFileInput from 'bs-custom-file-input';

import {
  capitalizeFirstLetter,
  formatDate,
  returnUrl,
} from '../../shared/util';
import { resetWizard, resizeTabContainer } from './wizard';
import {
  isValid,
  showServerErrors,
  toggleFechaVencimientoRules,
} from './validation';
import { tipoClienteConstants } from '../../shared/constants';

/**
 * Init plugin for file inputs
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function initCustomFile() {
  bsCustomFileInput.init();
}

/**
 *  Build a mask date input
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @param {string} elementId
 * @param {Date} minDate
 * @param {Date} maxDate
 */
export function createMaskDate(elementId, minDate, maxDate) {
  const momentFormat = 'DD/MM/YYYY';

  IMask(document.getElementById(elementId), {
    mask: Date,
    lazy: false,
    pattern: momentFormat,
    min: minDate,
    max: maxDate,
    overwrite: true,
    format: function(date) {
      return moment(date).format(momentFormat);
    },
    parse: function(str) {
      return moment(str, momentFormat);
    },
    blocks: {
      DD: {
        mask: IMask.MaskedRange,
        from: 1,
        to: 31,
        maxLength: 2,
        placeholderChar: '_',
      },
      MM: {
        mask: IMask.MaskedRange,
        from: 1,
        to: 12,
        maxLength: 2,
        placeholderChar: '_',
      },
      YYYY: {
        mask: IMask.MaskedRange,
        from: minDate.getFullYear(),
        to: maxDate.getFullYear(),
        maxLength: 4,
        placeholderChar: '_',
      },
    },
  });
}

/**
 * Build a mask money input
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @param {string} elementId
 */
export function createMaskMoneyValue(elementId) {
  IMask(document.getElementById(elementId), {
    mask: Number,
    scale: 2,
    signed: false,
    thousandsSeparator: ',',
    padFractionalZeros: true,
    normalizeZeros: true,
    radix: '.',
    mapToRadix: ['.'],
  });
}

/**
 * Show "fecha_vencimiento" field if user choose "Si" option
 * If "no" is chosem, "fecha_vencimiento" field hides
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function toggleFechaVencimiento() {
  const parentElement = document
    .getElementById('txt-fecha-vencimiento')
    .closest('.form-group');

  const valueTengoSoat = document.querySelector(
    'input[name=tiene_soat]:checked',
  ).value;

  if (valueTengoSoat == 1) {
    parentElement.classList.remove('d-none');
    toggleFechaVencimientoRules();
  } else {
    parentElement.classList.add('d-none');
    toggleFechaVencimientoRules(false);
  }

  const tabPane = document
    .getElementById('txt-fecha-vencimiento')
    .closest('.tab-pane');
  resizeTabContainer(tabPane);
}

/**
 * Show or hide "direccion" field according to tipoCompra value
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @param {string} tipoCompra
 */
export function toggleDireccionField(tipoCompra) {
  if (tipoCompra === 'adquisicion') {
    document
      .getElementById('txt-direccion')
      .closest('.form-group')
      .classList.remove('d-none');
  }

  if (tipoCompra === 'renovacion') {
    document
      .getElementById('txt-direccion')
      .closest('.form-group')
      .classList.add('d-none');
  }
}

/**
 * Show or hide following controls:
 * -  If customer type is Persona Natural, only show Nombres, Apellido Paterno and Apellido Materno input fields
 * -  Otherwise only show Razon Social input field
 *
 * @author Jesus Romero
 * @date 20/10/2020
 * @export
 * @param {string} tipoCliente
 */
export function toggleTipoClienteFields(tipoCliente) {
  if (tipoCliente === tipoClienteConstants.PERSONA_NATURAL) {
    document
      .getElementById('txt-nombres')
      .closest('.form-group')
      .classList.remove('d-none');

    document
      .getElementById('txt-apellido-paterno')
      .closest('.form-group')
      .classList.remove('d-none');

    document
      .getElementById('txt-apellido-materno')
      .closest('.form-group')
      .classList.remove('d-none');

    document
      .getElementById('txt-razon-social')
      .closest('.form-group')
      .classList.add('d-none');
  }

  if (tipoCliente === tipoClienteConstants.PERSONA_JURIDICA) {
    document
      .getElementById('txt-nombres')
      .closest('.form-group')
      .classList.add('d-none');

    document
      .getElementById('txt-apellido-paterno')
      .closest('.form-group')
      .classList.add('d-none');

    document
      .getElementById('txt-apellido-materno')
      .closest('.form-group')
      .classList.add('d-none');

    document
      .getElementById('txt-razon-social')
      .closest('.form-group')
      .classList.remove('d-none');
  }
}

/**
 * Refresh list of Tipos Documento Identidad
 *
 * @author Jesus Romero
 * @date 20/10/2020
 * @export
 * @param {*} tipoCliente
 */
export function loadSelectTipoDocumentoIdentidad(tipoCliente) {
  const urlTarget =
    returnUrl('tipos-documento-identidad') + '?tipo_cliente=' + tipoCliente;

  axios.get(urlTarget).then(response => {
    const data = response.data.data;
    const selectTipoDocumentoIdentidad = document.getElementById(
      'ddo-tipo-documento-identidad',
    );

    for (let i = selectTipoDocumentoIdentidad.options.length - 1; i >= 0; i--) {
      selectTipoDocumentoIdentidad.options[i].remove();
    }

    data.forEach(item => {
      const option = document.createElement('option');
      option.value = item.id;
      option.text = item.descripcion;
      selectTipoDocumentoIdentidad.options.add(option);
    });
  });
}

/**
 * Send data from contact form to server
 *
 * @author Jesus Romero
 * @date 28/09/2020
 * @export
 */
export function processContactForm() {
  const urlTarget = returnUrl('contacto');
  const payload = new FormData(document.getElementById('frm-contact'));

  showLoadingMessage();

  axios
    .post(urlTarget, payload)
    .then(() => {
      swal.fire({
        title: 'Mensaje enviado',
        text: 'Tu mensaje está en camino. Gracias por comunicarte con nosotros',
        icon: 'success',
        confirmButtonText: 'Aceptar',
      });
      document.getElementById('frm-contact').reset();
    })
    .catch(() => {
      swal.fire({
        title: 'Algo ocurrió',
        text: 'Tu mensaje no se pudo enviar. Por favor inténtalo mas tarde',
        icon: 'error',
        confirmButtonText: 'Aceptar',
      });
    });
}

/**
 * Process frmAfiliacionSeguroEstudiante
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function processAfiliacionSeguroEstudianteForm() {
  const urlTarget = returnUrl('afiliaciones/seguro_estudiante');
  const payload = new FormData(
    document.getElementById('frm-afiliacion-seguro-estudiante'),
  );

  payload.set(
    'estado_civil',
    capitalizeFirstLetter(payload.get('estado_civil')),
  );
  payload.set(
    'fecha_nacimiento',
    formatDate(payload.get('fecha_nacimiento'), 'DD/MM/YYYY', 'YYYY-MM-DD'),
  );

  showLoadingMessage();

  axios
    .post(urlTarget, payload)
    .then(() => {
      swal.fire({
        title: 'Datos de afiliación registrados',
        text:
          'Gracias por enviar tu solicitud de afiliación al seguro estudiantil contra accidentes. Nos comunicaremos contigo en breve',
        icon: 'success',
        confirmButtonText: 'Aceptar',
      });
      resetWizard();
    })
    .catch(error => {
      if (error.response.status === 400) {
        swal.fire({
          title: 'Algo ocurrió',
          text:
            'Algunos datos no son válidos. Por favor corrija las observaciones y vuelva a intentarlo',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
        showServerErrors(error.response.data.messages);
      } else {
        swal.fire({
          title: 'Algo ocurrió',
          text: 'Tu solicitud no se pudo enviar. Por favor inténtalo mas tarde',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
      }
    });
}

/**
 * Process frmCotizarSegurroVehiculo
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function processCotizarSeguroVehiculoTodoRiesgo() {
  const form = document.getElementById(
    'frm-cotizar-seguro-vehicular-todo-riesgo',
  );
  if (!isValid(form)) {
    return false;
  }

  const urlTarget = returnUrl('cotizaciones/vehiculo_todo_riesgo');
  const payload = new FormData(form);

  showLoadingMessage();

  axios
    .post(urlTarget, payload)
    .then(() => {
      swal.fire({
        title: 'Datos de cotización registrados',
        text:
          'Gracias por enviar tu solicitud de cotización de seguro vehicular todo riesgo. Nos comunicaremos contigo en breve',
        icon: 'success',
        confirmButtonText: 'Aceptar',
      });
      resetWizard();
    })
    .catch(error => {
      if (error.response.status === 400) {
        swal.fire({
          title: 'Algo ocurrió',
          text:
            'Algunos datos no son válidos. Por favor corrija las observaciones y vuelva a intentarlo',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
        showServerErrors(error.response.data.messages);
      } else {
        swal.fire({
          title: 'Algo ocurrió',
          text: 'Tu solicitud no se pudo enviar. Por favor inténtalo mas tarde',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
      }
    });
}

/**
 * Process frmCotizarSoat form
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 */
export function processCotizarSoatForm() {
  const form = document.getElementById('frm-cotizar-soat');
  if (!isValid(form)) {
    return false;
  }

  const urlTarget = returnUrl('cotizaciones/soat');
  const payload = new FormData(form);

  if (payload.get('tiene_soat') == 1) {
    payload.set(
      'fecha_nacimiento',
      formatDate(
        document.getElementById('txt-fecha-vencimiento').getAttribute('value'),
        'DD/MM/YYYY',
        'YYYY-MM-DD',
      ),
    );
  } else {
    payload.delete('fecha_vencimiento');
  }

  showLoadingMessage();

  axios
    .post(urlTarget, payload)
    .then(() => {
      swal.fire({
        title: 'Datos de cotizacion registrados',
        text:
          'Gracias por enviar tu solicitud de cotización de SOAT. Nos comunicaremos contigo en breve',
        icon: 'success',
        confirmButtonText: 'Aceptar',
      });
      resetWizard();
    })
    .catch(error => {
      if (error.response.status === 400) {
        swal.fire({
          title: 'Algo ocurrió',
          text:
            'Algunos datos no son válidos. Por favor corrija las observaciones y vuelva a intentarlo',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
        showServerErrors(error.response.data.messages);
      } else {
        swal.fire({
          title: 'Algo ocurrió',
          text: 'Tu solicitud no se pudo enviar. Por favor inténtalo mas tarde',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
      }
    });
}

/**
 * Process frmComprarSoat form
 *
 * @author Jesus Romero
 * @date 29/09/2020
 * @export
 * @returns {*}
 */
export function processComprarSoatForm() {
  const form = document.getElementById('frm-comprar-soat');
  if (!isValid(form)) {
    return false;
  }

  const urlTarget = returnUrl('compras/soat');
  const payload = new FormData(form);

  //  Process payload
  payload.set(
    'fecha_nacimiento',
    formatDate(
      document.getElementById('txt-fecha-nacimiento').value,
      'DD/MM/YYYY',
      'YYYY-MM-DD',
    ),
  );

  showLoadingMessage();

  axios
    .post(urlTarget, payload)
    .then(() => {
      swal.fire({
        title: 'Datos de compra registrados',
        text:
          'Gracias por enviar tu solicitud de compra de SOAT. Nos comunicaremos contigo en breve',
        icon: 'success',
        confirmButtonText: 'Aceptar',
      });
      resetWizard();
    })
    .catch(error => {
      if (error.response.status === 400) {
        swal.fire({
          title: 'Algo ocurrió',
          text:
            'Algunos datos no son válidos. Por favor corrija las observaciones y vuelva a intentarlo',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
        showServerErrors(error.response.data.messages);
      } else {
        swal.fire({
          title: 'Algo ocurrió',
          text: 'Tu solicitud no se pudo enviar. Por favor inténtalo mas tarde',
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
      }
    });
}

/**
 * Show loader on message
 *
 * @author Jesus Romero
 * @date 08/10/2020
 */
export function showLoadingMessage() {
  swal.fire({
    title: 'Espere',
    allowEscapeKey: false,
    allowOutsideClick: false,
    onBeforeOpen: () => swal.showLoading(),
  });
}
