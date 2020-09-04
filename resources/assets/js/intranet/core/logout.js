import { logout } from '../functions/auth';

if ($('#btn-logout')) {
  $('#btn-logout').on('click', logout);
}
