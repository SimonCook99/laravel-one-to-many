//File nuovo creato da noi, che si occuperà della parte javascript del frontend del sito, istanziando il componente Vue

window.Vue = require("vue");

import App from "./views/App";

const app = new Vue({

    el: "#root",
    render: h => h(App)
});