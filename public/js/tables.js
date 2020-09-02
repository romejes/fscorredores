(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/tables"],{

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ "./resources/assets/js/intranet/tables.js":
/*!************************************************!*\
  !*** ./resources/assets/js/intranet/tables.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! bootstrap-table */ "./node_modules/bootstrap-table/dist/bootstrap-table.min.js");

__webpack_require__(/*! bootstrap-table/src/locale/bootstrap-table-es-ES */ "./node_modules/bootstrap-table/src/locale/bootstrap-table-es-ES.js");

var util = __webpack_require__(/*! ./util */ "./resources/assets/js/intranet/util.js");

var columnsTable = [{
  title: 'Codigo',
  field: 'solicitud.codigo'
}, {
  title: 'Solicitado Por',
  formatter: function formatter(value, row) {
    return row.nombres + ' ' + row.apellido_paterno + ' ' + row.apellido_materno;
  }
}, {
  title: 'Fecha y Hora de Envio',
  field: 'solicitud.fecha_hora_registro'
}, {
  title: 'Estado',
  formatter: function formatter(value, row) {
    var badgeClassName = '';

    switch (row.solicitud.estado_solicitud.id) {
      case 1:
        badgeClassName = 'badge-warning';
        break;

      case 2:
        badgeClassName = 'badge-primary';
        break;

      case 3:
        badgeClassName = 'badge-success';
        break;

      case 4:
        badgeClassName = 'badge-danger';
        break;
    }

    return $('<span></span>', {
      "class": "badge ".concat(badgeClassName),
      text: row.solicitud.estado_solicitud.descripcion
    }).prop('outerHTML');
  }
}, {
  title: 'Acciones',
  formatter: function formatter(value, row) {
    var detailButton = $('<a></a>', {
      "class": 'btn',
      href: util.getBaseUrl() + '/intranet/compras/soat/' + row.solicitud.codigo,
      html: '<i class="fas fa-list text-primary"></i>',
      title: 'Ver detalles'
    });
    return detailButton.prop('outerHTML');
  }
}];
$('#tbl-compras-soat').bootstrapTable({
  url: util.getBaseUrl() + '/compras/soat',
  columns: columnsTable,
  pagination: true,
  responseHandler: function responseHandler(res) {
    return res.data;
  }
});
$('#tbl-cotizaciones-soat').bootstrapTable({
  url: util.getBaseUrl() + '/cotizaciones/soat',
  columns: columnsTable,
  pagination: true,
  responseHandler: function responseHandler(res) {
    return res.data;
  }
});
$('#tbl-cotizaciones-vtr').bootstrapTable({
  url: util.getBaseUrl() + '/cotizaciones/vehiculo_todo_riesgo',
  columns: columnsTable,
  pagination: true,
  responseHandler: function responseHandler(res) {
    return res.data;
  }
});
$('#tbl-afiliaciones-seguro_estudiantil').bootstrapTable({
  url: util.getBaseUrl() + '/afiliaciones/seguro_estudiantil',
  columns: columnsTable,
  pagination: true,
  responseHandler: function responseHandler(res) {
    return res.data;
  }
});

/***/ }),

/***/ "./resources/assets/js/intranet/util.js":
/*!**********************************************!*\
  !*** ./resources/assets/js/intranet/util.js ***!
  \**********************************************/
/*! exports provided: getBaseUrl */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getBaseUrl", function() { return getBaseUrl; });
function getBaseUrl() {
  return window.location.protocol + '//' + window.location.hostname;
}

/***/ }),

/***/ 1:
/*!******************************************************!*\
  !*** multi ./resources/assets/js/intranet/tables.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/jesus/Projects/fscorredores/resources/assets/js/intranet/tables.js */"./resources/assets/js/intranet/tables.js");


/***/ })

},[[1,"/js/manifest","/js/vendor"]]]);