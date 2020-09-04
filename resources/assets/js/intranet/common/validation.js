import jquery from 'jquery';
window.$ = window.jQuery = jquery;

import 'jquery-validation';
import 'jquery-validation/dist/localization/messages_es';

$.validator.setDefaults({
  errorElement: 'span',
  lang: 'es',
  errorPlacement: (error, element) => {
    error.addClass('invalid-feedback');
    element.closest('.form-group').append(error);
  },
  highlight: function(element, errorClass, validClass) {
    $(element).addClass('is-invalid');
  },
  unhighlight: function(element, errorClass, validClass) {
    $(element).removeClass('is-invalid');
  },
});
