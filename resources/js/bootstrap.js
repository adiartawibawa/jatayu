const { default: Popper } = require("popper.js");

window._ = require("lodash");

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

try {
    window.$ = window.jQuery = require("jquery");
    window.Popper = Popper;

    require("bootstrap");
} catch (e) {}
