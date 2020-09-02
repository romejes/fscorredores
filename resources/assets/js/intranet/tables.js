require('bootstrap-table');
require('bootstrap-table/src/locale/bootstrap-table-es-ES');
const util = require('./util');

const columnsTable = [
  {
    title: 'Codigo',
    field: 'solicitud.codigo',
  },
  {
    title: 'Solicitado Por',
    formatter: (value, row) => {
      return (
        row.nombres + ' ' + row.apellido_paterno + ' ' + row.apellido_materno
      );
    },
  },
  {
    title: 'Fecha y Hora de Envio',
    field: 'solicitud.fecha_hora_registro',
  },
  {
    title: 'Estado',
    formatter: (value, row) => {
      let badgeClassName = '';

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
        class: `badge ${badgeClassName}`,
        text: row.solicitud.estado_solicitud.descripcion,
      }).prop('outerHTML');
    },
  },
  {
    title: 'Acciones',
    formatter: (value, row) => {
      const detailButton = $('<a></a>', {
        class: 'btn',
        href:
          util.getBaseUrl() + '/intranet/compras/soat/' + row.solicitud.codigo,
        html: '<i class="fas fa-list text-primary"></i>',
        title: 'Ver detalles',
      });

      return detailButton.prop('outerHTML');
    },
  },
];

$('#tbl-compras-soat').bootstrapTable({
  url: util.getBaseUrl() + '/compras/soat',
  columns: columnsTable,
  pagination: true,
  responseHandler: res => {
    return res.data;
  },
});

$('#tbl-cotizaciones-soat').bootstrapTable({
  url: util.getBaseUrl() + '/cotizaciones/soat',
  columns: columnsTable,
  pagination: true,
  responseHandler: res => {
    return res.data;
  },
});

$('#tbl-cotizaciones-vtr').bootstrapTable({
  url: util.getBaseUrl() + '/cotizaciones/vehiculo_todo_riesgo',
  columns: columnsTable,
  pagination: true,
  responseHandler: res => {
    return res.data;
  },
});

$('#tbl-afiliaciones-seguro_estudiantil').bootstrapTable({
  url: util.getBaseUrl() + '/afiliaciones/seguro_estudiantil',
  columns: columnsTable,
  pagination: true,
  responseHandler: res => {
    return res.data;
  },
});
