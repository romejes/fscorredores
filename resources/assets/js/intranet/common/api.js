import axios from 'axios';
import { ROUTE_LOGIN, ROUTE_GET_COMPRAS_SOAT } from './routes';

export const apiLogin = payload => {
  return axios.post(ROUTE_LOGIN, payload);
};

export const apiGetCompraSoat = () => {
  return axios.get(ROUTE_GET_COMPRAS_SOAT);
};
