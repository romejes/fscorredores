import '../common/validation';
import { login } from '../functions/auth';

if ($('#frm-login')) {
  $('#frm-login').validate();
}

if ($('#btn-login')) {
  $('#btn-login').on('click', login);
  $('#frm-login').on('keyup', event => {
    if (event.keyCode === 13) {
      login();
    }
  });
}