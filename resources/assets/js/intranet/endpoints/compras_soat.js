import { requestFormConstants } from '../../shared/constants';
import { existsElement } from '../../shared/util';
import { processChangeStatus } from '../functions/forms';
import { loadTableCompraSoat } from '../functions/tables';

if (existsElement('#tbl-compras-soat')) {
  loadTableCompraSoat();
}

if (existsElement('#detail-compra-soat')) {
  document
    .getElementById('btn-rechazar')
    .addEventListener('click', () =>
      processChangeStatus(requestFormConstants.REQUEST_COMPRA_SOAT, 'reject'),
    );

  document
    .getElementById('btn-marcar-atendido')
    .addEventListener('click', () =>
      processChangeStatus(requestFormConstants.REQUEST_COMPRA_SOAT),
    );
}
