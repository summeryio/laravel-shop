
require('./bootstrap');
require('sweetalert');

window.Vue = require('vue');

require('./components/SelectDistrict');
require('./components/UserAddressesCreateAndEdit');

const app = new Vue({
    el: '#app',
});
