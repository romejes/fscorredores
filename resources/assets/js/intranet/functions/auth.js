import { apiLogin } from '../common/api';
import Swal from 'sweetalert2';
import { ROUTE_DASHBOARD, ROUTE_LOGOUT } from '../common/routes';
import { showValidationErrorsFromServer } from '../common/util';

export const login = () => {
  if (!$('#frm-login').valid()) {
    return;
  }

  const loginForm = document.getElementById('frm-login');
  const loginFormData = new FormData(loginForm);

  apiLogin(loginFormData)
    .then(() => (window.location.href = ROUTE_DASHBOARD))
    .catch(error => {
      if (error.response.status === 404) {
        Swal.fire({
          title: 'Error',
          text: error.response.data.message,
          icon: 'error',
          confirmButtonText: 'Aceptar',
        });
      }

      if (error.response.status === 400) {
        showValidationErrorsFromServer(error.response.data.messages);
      }
    });
};

export const logout = () => {
  Swal.fire({
    title: 'Salir del Sistema',
    text: '¿Está seguro de que desea salir del sistema?',
    icon: 'question',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: 'No',
    focusConfirm: false,
    focusCancel: true,
    allowOutsideClick: false,
    allowEscapeKey: false,
  }).then(result => {
    if (result.value) {
      window.location.href = ROUTE_LOGOUT;
    }
  });
};
