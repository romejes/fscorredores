import { requestFormConstants } from '../../shared/constants';
import { existsElement } from '../../shared/util';
import { processChangeStatus } from '../functions/forms';
import { loadTableCotizacionesVehiculoTodoRiesgo } from '../functions/tables';

if (existsElement('#tbl-cotizaciones-vehiculo-todo-riesgo')) {
  loadTableCotizacionesVehiculoTodoRiesgo();
}

if (existsElement('#detail-cotizacion-vehiculo-todo-riesgo')) {
  document
    .getElementById('btn-rechazar')
    .addEventListener('click', () =>
      processChangeStatus(
        requestFormConstants.REQUEST_COTIZAR_SEGURO_VEHICULO,
        'reject',
      ),
    );
  document
    .getElementById('btn-marcar-atendido')
    .addEventListener('click', () =>
      processChangeStatus(requestFormConstants.REQUEST_COTIZAR_SEGURO_VEHICULO),
    );
}
