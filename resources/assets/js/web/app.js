import { existsElement } from '../shared/util';
import { setWizard } from './functions';

if (existsElement('.wizard')) {
  setWizard('.wizard');
}
