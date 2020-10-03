import { existsElement } from '../../shared/util';
import { loadTableCotizacionesSoat } from '../functions/tables';
import { processChangeStatus } from '../functions/forms';
import { requestFormConstants } from '../../shared/constants';

if (existsElement('#tbl-cotizaciones-soat')) {
  loadTableCotizacionesSoat();
}

if (existsElement('#detail-cotizacion-soat')) {
  document
    .getElementById('btn-rechazar')
    .addEventListener('click', () =>
      processChangeStatus(requestFormConstants.REQUEST_COTIZAR_SOAT, 'reject'),
    );
  document
    .getElementById('btn-marcar-atendido')
    .addEventListener('click', () =>
      processChangeStatus(requestFormConstants.REQUEST_COTIZAR_SOAT),
    );
}
