import 'bootstrap-table';
import 'bootstrap-table/src/locale/bootstrap-table-es-ES';
import { getBaseUrl } from '../../shared/util';
import { ROUTE_GET_COMPRAS_SOAT } from '../common/routes';

const commonColumns = [
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
];

export const loadTableCompraSoat = () => {
  $('#tbl-compra-soat').bootstrapTable({
    url: ROUTE_GET_COMPRAS_SOAT,
    pagination: true,
    responseHandler: response => {
      return response.data;
    },
    columns: [
      ...commonColumns,
      {
        title: 'Acciones',
        formatter: (value, row) => {
          const detailButton = $('<a></a>', {
            class: 'btn',
            href:
              getBaseUrl() + '/intranet/compras/soat/' + row.solicitud.codigo,
            html: '<i class="fas fa-list text-primary"></i>',
            title: 'Ver detalles',
          });

          return detailButton.prop('outerHTML');
        },
      },
    ],
  });
};
