import axios from 'axios';
import "flyonui/flyonui";
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
